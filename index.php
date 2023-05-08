<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ASH Study...</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="Sources/LoadingStyles/loadingStyle.css" />
  <link rel="stylesheet" href="Sources/SiteAnimations/laserAnimation.css" />
  <link rel="stylesheet" href="Sources/SiteAnimations/tamplateAnimations.css" />
  <link rel="stylesheet" href="Sources/OldASH/Sources/CSS/style.css" />
  <link rel="stylesheet" href="Sources/SiteStyles/styles.css" />
  <link rel="stylesheet" href="Sources/SiteStyles/homePage.css" />
  <link rel="stylesheet" href="Sources/SiteStyles/aboutPage.css" />
  <link rel="stylesheet" href="Sources/SiteStyles/projectsPage.css" />
  <link rel="stylesheet" href="Sources/SiteStyles/responsive.css" />

  <link rel="icon" href="Sources/Logoes/ASH_Favicon.png" />
</head>

<body>
<!-- ///////////////////////////////////////////NEW ASH STARTS///////////////////////////////////////////////// -->

  <!-- ==============================WEBPAGE's BACKGROUND AREA============================= -->
  <section id="loadingBody" class="loadingBody">
    <div class="loading"></div>
  </section>
  
  <section id="bodyBackgroundMain" class="bodyBackgroundMain displayNone">
    <div class="backgroundBalls">
      <div class="backgroundBallOne backgroundBallMain backgroundBallMainONE"></div>
      
      <div class="backgroundBallTwo backgroundBallMain backgroundBallMainTWO"></div>
      
      <div class="backgroundBallThree backgroundBallMain backgroundBallMainTHREE"></div>
      
      <div class="backgroundBallThree backgroundBallMain backgroundBallMainFOUR"></div>
    </div>
    
    <section id="overlayBodyMain" class="overlayBodyMain">
      <div class="topLaserLine" id="ASH"></div>
    <!-- ==============================WEBPAGE's BACKGROUND AREA============================= -->

      
<!-- ====================================HEADER SECTION ENDS====================================== -->
      <header class="headingOfPage">
        <div class="subHeadings logoBox">
          <img src="Sources/Logoes/AnimatedLogoASH.gif" alt="ASH_Logo" />
        </div>
        
        <div class="subHeadings navigationBox">
          <ul>
            <li class="navigationItems navigationBarForLargeScreen" onclick="pageChange(1)">
              Home
            </li>

            <li onclick="pageChange(2)" class="navigationItems navigationBarForLargeScreen">About</li>

            <li onclick="pageChange(3)" class="navigationItems navigationBarForLargeScreen">
              Projects
            </li>

            <li onclick="pageChange(0)" class="navigationItems navigationBarForLargeScreen revertBackButton">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-arrow-left-right" viewBox="0 0 16 16" tittle="Old ASH">
                <path fill-rule="evenodd"
                  d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
              </svg>
            </li>
          </ul>
        </div>

        <nav class="responsiveNavigationBar displayNone" id="navigationBarForSmallScreen">
          <button class="navigationOnToggler" id="navigationOnToggler" onclick="toggleNavBar(1)">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
              viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
          </button>

          <section class="sideNavBarParent" id="sideNavBarParent">
            <section class="sideNavBarMain">
              <button class="navigationOffToggler" id="navigationOffToggler" onclick="toggleNavBar(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg"
                  viewBox="0 0 16 16">
                  <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                </svg>
              </button>

              <div class="navigationItemsResponsive">
                <ul>
                  <li onclick="pageChange(1)" class="navigationItems">Home</li>

                  <li onclick="pageChange(2)" class="navigationItems">About</li>

                  <li onclick="pageChange(3)" class="navigationItems">Projects</li>

                  <li onclick="pageChange(0)" class="revertBackButton navigationItems">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                      class="bi bi-arrow-left-right" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                    </svg>
                  </li>
                </ul>
              </div>
            </section>
          </section>
        </nav>
      </header>
<!-- ====================================HEADER SECTION ENDS====================================== -->

<!-- =============================MAIN  SECTION STARTS=============================== -->
      <main class="pageMainContent">

        <!-- =====================ALL THE INTERNAL PAGES RENDERS OVER HERE============================== -->
        
        <?php
          include "Sources/Components/homePage.php";
          include "Sources/Components/aboutPage.php";
          include "Sources/Components/projectsPage.php";
          ?>

      <!-- =====================ALL THE INTERNAL PAGES RENDERS OVER HERE============================== -->

</main>
<!-- =============================MAIN  SECTION ENDS=============================== -->


<!-- ===============================FOOTER SECTION STARTS================================================ -->

<footer class="footerParent">
  <section class="footerMainBox">
    <section class="footerParts mainFooter">
      <div class="footerDataSections ASH-INFO">
              <div class="footerASHLogo">
                <img src="Sources/Logoes/AnimatedLogoASH.gif" alt="" />
              </div>
              
              <div class="additionalDetails">
                <a href="https://app.infinityfree.net/login" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-server" viewBox="0 0 16 16">
                  <path
                  d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />

                  <path
                      d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />

                    <path
                      d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
                    </svg>
                  </a>
                  
                  <a href="https://www.linkedin.com/in/anuragvishwakarma" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                    class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path
                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                  </svg>
                </a>
                
                <a href="https://github.com/vishanurag" target="_blank">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-github" viewBox="0 0 16 16">
                  <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                </svg>
                </a>
              </div>

              <div class="footerSeperationLine"></div>
            </div>
            
            <div class="footerDataSections footerLinks">
              <header class="importantLinksHeading">IMPORTANT LINKS</header>
              
              <main class="importantLinksParentBox">
                <div class="importantLinksBoxes">
                  <header>Learning Resources</header>
                  
                  <main>
                    <ul>
                      <li>
                        <a href="" target="_blank"> Geeks For Geeks </a>
                      </li>
                      
                      <li>
                        <a href="" target="_blank"> Code Studio </a>
                      </li>
                      
                      <li>
                        <a href="" target="_blank"> Take U Forward </a>
                      </li>
                    </ul>
                  </main>
                </div>
                
                <div class="importantLinksBoxes">
                  <header>Contact Us</header>
                  
                  <main>
                    <ul>
                      <li>
                        <a href="mailto:anuraga2005@gmail.com">
                          anuraga2005@gmail.com
                        </a>
                      </li>
                      
                      <li>
                        <a href="mailto:sumitrathor142272@gmail.com">
                          sumitrathor142272@gmail.com
                        </a>
                      </li>

                      <li>
                        <a href="mailto:911singhpremchand@gmail.com">
                          911singhpremchand@gmail.com
                        </a>
                      </li>
                    </ul>
                  </main>
                </div>
              </main>
            </div>
          </section>

          <section class="footerParts copyrightStatment">
            <div class="copyrightASH">
              Copyright &copy; 2022-2023 ASH Study. All Rights Reserved.
            </div>
            
            <div class="creator">
              Designed & Developed by
              
              <a href="NameAnimation"> ANURAG VISWAKARMA. </a>
            </div>
          </section>

          <a href="#ASH" class="scrollUp">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-up"
            viewBox="0 0 16 16">
              <path
              d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z" />
            </svg>
          </a>
        </section>
      </footer>

<!-- ===============================FOOTER SECTION STARTS================================================ -->
      
      <div id="bottomLaserLine" class="bottomLaserLine"></div>
    </section>
  </section>
<!-- ///////////////////////////////////////////NEW ASH ENDS///////////////////////////////////////////////// -->
  

<!-- -----------------------------------OLD ASH WEBSITE RENDERS HERE------------------------------------ -->
  <?php
    include "Sources/Components/oldASH.php";
    ?>
<!-- -----------------------------------OLD ASH WEBSITE RENDERS HERE------------------------------------ -->

    

<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% NECESSARY SCRIPTS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%55 -->
  <script src="Sources/SiteScripts/loading.js"></script>
  <script src="Sources/SiteScripts/navBar.js"></script>
  <script src="Sources/SiteScripts/pageSwitch.js"></script>
<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% NECESSARY SCRIPTS %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%55 -->
</body>

</html>