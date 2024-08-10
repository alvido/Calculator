// Burger Menu Open //
document.addEventListener("DOMContentLoaded", function () {
  // Выбираем бургер-кнопку и навигацию
  let burgerButton = document.getElementById("burgerButton");
  let navigation = document.querySelector(".navigation");
  let links = document.querySelectorAll(".navigation__list a");
  let body = document.querySelector("body");

  // Если бургер-кнопка существует, добавляем обработчик события
  if (burgerButton) {
    burgerButton.addEventListener("click", function (e) {
      e.stopPropagation(); // Остановка всплытия события
      burgerButton.classList.toggle("burger--active"); // Переключаем класс активности бургер-кнопки
      navigation.classList.toggle("navigation--active"); // Переключаем класс активности навигации
      body.classList.toggle("lock");
    });
  }

  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      burgerButton.classList.remove("burger--active");
      navigation.classList.remove("navigation--active");
      body.classList.remove("lock");
      console.log("link", link);
    });
  });
});
//

//search input open
document.addEventListener("DOMContentLoaded", function () {
  let searchOpen = document.getElementById("searchOpen");
  let search = document.getElementById("search");

  if (searchOpen) {
    searchOpen.addEventListener("click", function (e) {
      e.stopPropagation(); // Остановка всплытия события
      search.classList.toggle("search--active"); // Переключаем класс активности навигации
    });

    document.addEventListener("click", function (e) {
      // Проверяем, является ли целевой элемент частью элемента "search"
      if (!search.contains(e.target)) {
        search.classList.remove("search--active"); // Удаляем класс активности
      }
    });
  }
});
//search input open

// // select2
$(document).ready(function () {
  $("#category, #disability").select2({
    minimumResultsForSearch: Infinity,
  });
});
// //

//peaple Count
document.addEventListener("DOMContentLoaded", function () {
  const peopleCheckbox = document.getElementById("people");
  const peopleCountContainer = document.getElementById("peopleCountContainer");
  const peopleCountInput = document.getElementById("peopleCount");
  const increaseButton = document.getElementById("increaseButton");
  const decreaseButton = document.getElementById("decreaseButton");

  const togglePeopleCount = () => {
    if (peopleCheckbox) {
      if (peopleCheckbox.checked) {
        peopleCountContainer.classList.remove("visually-hidden");
      } else {
        peopleCountContainer.classList.add("visually-hidden");
      }

      peopleCheckbox.addEventListener("change", togglePeopleCount);
    }
  };

  if (increaseButton) {
    increaseButton.addEventListener("click", function () {
      let currentValue = parseInt(peopleCountInput.value) || 1;
      peopleCountInput.value = currentValue + 1;
    });
  }

  if (decreaseButton) {
    decreaseButton.addEventListener("click", function () {
      let currentValue = parseInt(peopleCountInput.value) || 1;
      if (currentValue > 1) {
        peopleCountInput.value = currentValue - 1;
      }
    });
  }

  // Initialize the visibility on page load
  togglePeopleCount();
});
//peaple Count

// faq collapse
document.addEventListener("DOMContentLoaded", function () {
  document
    .querySelectorAll(".faq__list-header h4, .faq__list-collapse")
    .forEach(function (element) {
      element.addEventListener("click", function () {
        var liItem = this.closest("li");
        if (liItem) {
          liItem.classList.toggle("show");
        }
      });
    });
});
// faq collapse

// faq collapse
document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll(".more").forEach(function (morelink) {
    morelink.addEventListener("click", function () {
      var wrapper = this.closest(".wrapper");
      var limitElement = wrapper.querySelector(".limit");
      if (limitElement) {
        limitElement.classList.toggle("show");
      }
      // Переключаем класс 'less' у кнопки с плавным исчезновением текста
      this.classList.toggle("less");

      // Сначала плавно скрываем кнопку
      this.style.opacity = "0";

      // Через 0.5 секунд изменяем текст кнопки
      setTimeout(() => {
        if (this.classList.contains("less")) {
          this.innerHTML =
            'Повернутися <img src="assets/images/icon/shevron.svg" alt="">';
        } else {
          this.innerHTML =
            'Читати більше <img src="assets/images/icon/shevron.svg" alt="">';
        }
        // Плавно отображаем кнопку обратно
        this.style.opacity = "1";
      }, 300);
    });
  });
});
// faq collapse
