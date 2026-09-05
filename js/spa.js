/**
 * InvenTrack - Navegación SPA
 * -------------------------------------------------------
 * Cambia entre los módulos sin recargar index.php.
 *
 * Los módulos están preparados como secciones independientes
 * dentro de #cont-principal.
 */

document.addEventListener("DOMContentLoaded", () => {
    const menuItems = document.querySelectorAll(".menu-item[data-target]");
    const sections = document.querySelectorAll("#cont-principal .seccion");

    /**
     * Obtiene el módulo solicitado desde la URL.
     * Ejemplo: index.php#productos
     */
    function getModuleFromUrl() {
        const requestedModule = window.location.hash
            .replace("#", "")
            .trim();

        if (
            requestedModule &&
            document.getElementById(requestedModule)
        ) {
            return requestedModule;
        }

        return "dashboard";
    }

    /**
     * Activa un módulo.
     *
     * @param {string} moduleId
     * @param {boolean} updateUrl
     */
    function showModule(moduleId, updateUrl = true) {
        const targetSection = document.getElementById(moduleId);

        if (!targetSection) {
            console.warn(
                `InvenTrack SPA: el módulo "${moduleId}" no existe.`
            );
            return;
        }

        // Ocultar todos los módulos y mostrar únicamente el seleccionado.
        sections.forEach(section => {
            const isActive = section.id === moduleId;

            section.classList.toggle("active", isActive);

            section.setAttribute(
                "aria-hidden",
                String(!isActive)
            );
        });

        // Actualizar la opción activa del sidebar.
        menuItems.forEach(item => {
            const isActive = item.dataset.target === moduleId;

            item.classList.toggle("active", isActive);

            const itemContent = item.querySelector("li");

            if (itemContent) {
                itemContent.classList.toggle("active", isActive);
            }
        });

        // Guardar el módulo en la URL sin recargar la página.
        if (updateUrl) {
            history.pushState(
                { module: moduleId },
                "",
                `#${moduleId}`
            );
        }

        // Volver al inicio del área de contenido.
        const main = document.getElementById("cont-principal");

        if (main) {
            main.scrollTop = 0;
        }

        /**
         * Evento personalizado.
         *
         * Más adelante podremos utilizarlo para inicializar
         * tablas, formularios o datos de cada módulo.
         */
        document.dispatchEvent(
            new CustomEvent("spa:navigate", {
                detail: {
                    module: moduleId,
                    section: targetSection
                }
            })
        );
    }

    // Navegación mediante el sidebar.
    menuItems.forEach(item => {
        item.addEventListener("click", event => {
            event.preventDefault();

            const moduleId = item.dataset.target;

            if (moduleId) {
                showModule(moduleId);
            }
        });
    });

    // Botones atrás/adelante del navegador.
    window.addEventListener("popstate", () => {
        showModule(getModuleFromUrl(), false);
    });

    // Cambios directos del hash.
    window.addEventListener("hashchange", () => {
        showModule(getModuleFromUrl(), false);
    });

    // Abrir el módulo indicado en la URL al cargar.
    showModule(getModuleFromUrl(), false);

    // Permitir navegar desde otros archivos JavaScript.
    window.invenTrackSPA = {
        showModule
    };
});