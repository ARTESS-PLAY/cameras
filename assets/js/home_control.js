document.querySelectorAll(".btn_open-installation-application").forEach((btn) => {
    btn.addEventListener("click", () => {
        window.location.href = '/html/installation_maintenance.html?openApplication=true'; 
    });
});