
<!-- START LEFT-SIDEBAR-MENU -->
<div class="sticky">
    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__header">
            <a class="main-logo" href="">
                <img src={{ asset("images/conc.png") }} class="desktop-logo desktop-logo-dark" alt="soliclogo">
                <img src={{ asset("solic_pro/assets/images/brand/dark-logo.png") }} class="desktop-logo" alt="soliclogo">
                <img src={{ asset("solic_pro/assets/images/brand/icon.png") }} class="mobile-logo mobile-logo-dark" alt="soliclogo">
                <img src={{ asset("solic_pro/assets/images/brand/icon-2.png") }} class="mobile-logo" alt="soliclogo">
            </a>
        </div>
        <div class="main-sidemenu">
            <div class="slide-left disabled" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="side-menu">
                <li class="sub-category">
                    <h3>Main</h3>
                </li>
                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                        <span class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>
                        </span>
                        <span class="side-menu__label text-truncate">Home</span>
                        <i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            <div class="tab-menu-heading p-0 pb-2 border-0">
                                <div class="tabs-menu ">
                                    <ul class="nav panel-tabs">
                                        <li><a href="#side1" class="active" data-bs-toggle="tab"><i class="ri-home-5-line"></i><p>Home</p></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side1">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu__label1"><a href="javascript:void(0)">Home</a></li>
                                            <li><a class="slide-item" href="index.html">Profile</a></li>
                                            <li><a class="slide-item" href="index.html">Home Page</a></li>
                                        </ul>
                                        <div class="menutabs-content">
                                            <h5 class="my-4 px-1 ">Activites</h5>
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                            </div>
                        </li>

                    </ul>
                </li>
                <li class="sub-category">
                    <h3>GENERAL</h3>
                </li>

                <li class="slide">
                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
                        <span class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side_menu_img" viewBox="0 0 24 24"><path d="M4 11h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1zm1-6h4v4H5V5zm15-2h-6a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zm-1 6h-4V5h4v4zm-9 12a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h6zm-5-6h4v4H5v-4zm13-1h-2v2h-2v2h2v2h2v-2h2v-2h-2z"></path></svg>
                        </span>
                        <span class="side-menu__label">Activities</span>
                        <i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li class="panel sidetab-menu">
                            
                            <div class="panel-body tabs-menu-body p-0 border-0">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="side23">
                                        <ul class="sidemenu-list">
                                            <li class="side-menu__label1"><a href="javascript:void(0)">Activites</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)">Your condidats</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)">Your rooms</a></li>
                                            <li><a class="slide-item" href="javascript:void(0)">Your concours </a></li>
                                            
                                        </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                
                
            <div class="slide-right" id="slide-right">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg>
            </div>
        </div>
    </aside>
</div>




<!-- JQUERY SCRIPTS -->
<script src={{ asset("solic_pro/assets/js/vendors/jquery.min.js") }}></script>

<!-- BOOTSTRAP SCRIPTS -->
<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/popper.min.js") }}></script>
<script src={{ asset("solic_pro/assets/plugins/bootstrap/js/bootstrap.min.js") }}></script>

<!-- CHART-CIRCLE -->
<script src={{ asset("solic_pro/assets/js/vendors/circle-progress.min.js") }}></script>

<!-- CHARTJS CHART -->
<script src={{ asset("solic_pro/assets/plugins/chart/Chart.bundle.js") }}></script>
<script src={{ asset("solic_pro/assets/plugins/chart/utils.js") }}></script>

<!-- APEX-CHARTS JS -->
<script src={{ asset("solic_pro/assets/plugins/apexcharts/apexcharts.min.js") }}></script>

   <!-- STICKY JS-->
<script src={{ asset("solic_pro/assets/js/sticky.js") }}></script>

<!-- SIDEMENU JS-->
<script src={{ asset("solic_pro/assets/plugins/sidemenu/sidemenu.js") }}></script>

<!-- PERFECT SCROLL BAR JS-->
<script src={{ asset("solic_pro/assets/plugins/pscrollbar/perfect-scrollbar.js") }}></script>
<script src={{ asset("solic_pro/assets/plugins/pscrollbar/pscroll-sidemenu.js") }}></script>

<!-- PIETY CHART -->
<script src={{ asset("solic_pro/assets/plugins/peitychart/jquery.peity.min.js") }}></script>
<script src={{ asset("solic_pro/assets/plugins/peitychart/peitychart.init.js") }}></script>

<!-- ECHART JS -->
<script src={{ asset("solic_pro/assets/plugins/echarts/echart.min.js") }}></script>

<!-- SIDEBAR JS -->
<script src={{ asset("solic_pro/assets/plugins/sidebar/sidebar.js") }}></script>

<!-- INDEX-5 JS -->
<script src={{ asset("solic_pro/assets/js/index5.js") }}></script>

<!-- CUSTOM-SWICTHER JS -->
<script src={{ asset("solic_pro/assets/js/custom-switcher.js") }}></script>

<!-- SWITCHER JS -->
<script src={{ asset("solic_pro/assets/switcher/js/switcher.js") }}></script>

<!-- CUSTOM JS-->
<script src={{ asset("solic_pro/assets/js/custom.js") }}></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const langMenu = document.querySelectorAll(".dropdown-menu .dropdown-item");
        const currentLang = document.getElementById("current-lang");

        langMenu.forEach(item => {
            item.addEventListener("click", function (e) {
                e.preventDefault();
                let selectedLang = this.getAttribute("data-lang");
                let selectedText = this.textContent;

                // Met à jour le texte affiché dans le menu
                currentLang.innerHTML = selectedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';

                // Stocke la langue sélectionnée (optionnel, pour persister la préférence)
                localStorage.setItem("selectedLang", selectedLang);

                // Met à jour le contenu selon la langue sélectionnée (exemple simple)
                changeLanguage(selectedLang);
            });
        });

        // Charger la langue stockée si elle existe
        let savedLang = localStorage.getItem("selectedLang");
        if (savedLang) {
            let savedText = document.querySelector(`.dropdown-item[data-lang="${savedLang}"]`).textContent;
            currentLang.innerHTML = savedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';
            changeLanguage(savedLang);
        }

        function changeLanguage(lang) {
            // Ici, tu peux charger dynamiquement du contenu traduit
            console.log("Langue changée en : " + lang);
            // Exemple : Modifier du texte dans la page
            document.documentElement.lang = lang;
        }
    });
</script>
<script>
function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en', // Langue par défaut
        includedLanguages: 'en,fr,de,it,ru,es,ar', // Langues disponibles
        autoDisplay: false
    }, 'google_translate_element');
}

// Charger Google Translate API en arrière-plan
(function() {
    var gtScript = document.createElement('script');
    gtScript.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
    document.body.appendChild(gtScript);
})();

document.addEventListener("DOMContentLoaded", function () {
    const langMenu = document.querySelectorAll(".dropdown-menu .dropdown-item");
    const currentLang = document.getElementById("current-lang");

    langMenu.forEach(item => {
        item.addEventListener("click", function (e) {
            e.preventDefault();
            let selectedLang = this.getAttribute("data-lang");
            let selectedText = this.textContent;

            // Mettre à jour le texte affiché dans le menu
            currentLang.innerHTML = selectedText + ' <i class="mdi mdi-chevron-down ms-2"></i>';

            // Appliquer la langue via Google Translate
            let googleFrame = document.querySelector(".goog-te-combo");
            if (googleFrame) {
                googleFrame.value = selectedLang;
                googleFrame.dispatchEvent(new Event("change"));
            }
        });
    });
});
</script>
<!-- END LEFT-SIDEBAR-MENU -->