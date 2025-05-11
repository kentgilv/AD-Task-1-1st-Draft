function toggleMenu() {
      const navbarLinks = document.getElementById("navbarLinks");
      const toggleMenuBtn = document.getElementById("toggleMenuBtn");
      const toggleIcon = document.getElementById("toggleIcon");

      navbarLinks.classList.toggle("active");

      if (navbarLinks.classList.contains("active")) {
        toggleIcon.textContent = "close";
        toggleMenuBtn.setAttribute("title", "Hide Menu");
      } else {
        toggleIcon.textContent = "menu";
        toggleMenuBtn.setAttribute("title", "Show Menu");
      }
    }