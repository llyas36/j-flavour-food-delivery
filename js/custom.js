$(function () {
  // Main Menu JS
  $(window).scroll(function () {
    if ($(this).scrollTop() < 50) {
      $("nav").removeClass("site-top-nav");
      $("#back-to-top").fadeOut();
    } else {
      $("nav").addClass("site-top-nav");
      $("#back-to-top").fadeIn();
    }
  });

  // Shopping Cart Toggle JS
  $("#shopping-cart").on("click", function () {
    $("#cart-content").toggle("blind", "", 500);
  });

  // Back-To-Top Button JS
  $("#back-to-top").click(function (event) {
    event.preventDefault();
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      1000
    );
  });

  // Delete Cart Item JS
  $(document).on("click", ".btn-delete", function (event) {
    event.preventDefault();
    $(this).closest("tr").remove();
    updateTotal();
  });

  // Update Total Price JS
  function updateTotal() {
    let total = 0;
    $("#cart-content tr").each(function () {
      const rowTotal = parseFloat($(this).find("td:nth-child(5)").text().replace("$", ""));
      if (!isNaN(rowTotal)) {
        total += rowTotal;
      }
    });
    $("#cart-content th:nth-child(5)").text("$" + total.toFixed(2));
    $(".tbl-full th:nth-child(6)").text("$" + total.toFixed(2));
  }
});

<script>

const signupSection = document.getElementById('signup');
const loginSection = document.getElementById('signin');
const showLoginLink = document.getElementById('show-signin');
const showSignupLink = document.getElementById('show-signup');

// Add event listeners to switch between signin and signup
showLoginLink.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default link behavior
    signupSection.classList.add('hidden'); // Hide signup section
    loginSection.classList.remove('hidden'); // Show login section
});

showSignupLink.addEventListener('click', function(e) {
    e.preventDefault(); // Prevent the default link behavior
    loginSection.classList.add('hidden'); // Hide login section
    signupSection.classList.remove('hidden'); // Show signup section
});
</script>
