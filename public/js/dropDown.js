
        document.addEventListener("DOMContentLoaded", function() {
          var button = document.getElementById("dropdownButton");
          var menu = document.getElementById("dropdownMenu");

          button.addEventListener("click", function() {
            menu.classList.toggle("hidden");
          });

          // Feche o menu se clicar fora dele
          document.addEventListener("click", function(event) {
            if (!menu.contains(event.target) && !button.contains(event.target)) {
              menu.classList.add("hidden");
            }
          });
        });

