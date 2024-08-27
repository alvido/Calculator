// calculator //

// Обработчик события загрузки страницы
document.addEventListener("DOMContentLoaded", () => {
  // Массив идентификаторов входных элементов
  const inputs = [
    "brutto",
    "age",
    "category",
    "geographical",
    "demographic",
    "disability",
    "people",
    "peopleCount",
  ];

  let calcularButton = document.getElementById("calcularButton");
  calcularButton.addEventListener("click", () => {
    calculateReturns();
    render();
  });

  // Добавляем обработчики событий для каждого входного элемента
  inputs.forEach((id) => {
    const element = document.getElementById(id);
    if (element.type === "checkbox" || element.tagName === "SELECT") {
      // Если элемент является чекбоксом или выпадающим списком
      element.addEventListener("change", () => {
        validateInput();
      });
    } else {
      element.addEventListener("input", () => {
        validateInput();
      });
    }
  });

  const actionButton = document.querySelector(".action__button");
  if (actionButton) {
    this.addEventListener("click", calculateReturns); // Добавляем обработчик изменения
  }

  // Используем select2 для элемента category
  $("#category").on("select2:select", function (e) {
    calculateReturns(); // Пересчитываем данные при изменении значения
  });

  // Используем select2 для элемента geographical
  $("#geographical").on("select2:select", function (e) {
    calculateReturns(); // Пересчитываем данные при изменении значения
  });

  // Используем select2 для элемента disability
  $("#disability").on("select2:select", function (e) {
    calculateReturns(); // Пересчитываем данные при изменении значения
  });

  calculateReturns(); // Вызываем calculateReturns() при загрузке страницы
});

// Функция для расчета данных
function calculateReturns() {
  let tax = 1241.53;

  const brutto = parseFloat(document.getElementById("brutto").value);
  const age = parseFloat(document.getElementById("age").value);
  // const category = document.getElementById("category").value;
  // const geographical = document.getElementById("geographical").value;
  // const demographic = document.getElementById("demographic").checked;
  // const disability = document.getElementById("disability").value;
  // const people = document.getElementById("people").checked;
  // const peopleCount = document.getElementById("peopleCount").value;

  // Пример значения brutto
  bruttoAnual = brutto; // Ваше значение brutto

  // Массив объектов для хранения диапазонов и соответствующих значений
  const taxBrackets = [
    { min: 14501, max: 25000, rate: 10.5 },
    { min: 25001, max: 50000, rate: 16.5 },
    { min: 50001, max: 90000, rate: 27.5 },
    { min: 90001, max: 150000, rate: 33 },
    { min: 150001, max: 200000, rate: 37 },
    { min: 200001, max: 300000, rate: 40 },
    { min: 300001, max: 400000, rate: 45 },
    { min: 400001, max: 600000, rate: 47 },
    { min: 600001, max: 1000000, rate: 48 },
    { min: 1000001, max: 10000000, rate: 49 },
  ];

  // Функция для определения налоговой ставки
  function getPersonalTax(bruttoAnual) {
    // Найти соответствующую налоговую ставку
    const taxBracket = taxBrackets.find(
      (bracket) => bruttoAnual >= bracket.min && bruttoAnual <= bracket.max
    );

    // Вернуть соответствующую налоговую ставку или 0 по умолчанию
    return taxBracket ? taxBracket.rate : 0;
  }

  // Вычислить налоговую ставку
  const personalTax = getPersonalTax(bruttoAnual);

  socialRate = tax;

  withholding = personalTax;

  cuotaIRPF = (bruttoAnual * withholding) / 100;

  netoAnual = bruttoAnual - cuotaIRPF - socialRate;
}

function validateInput() {
  // Получаем все input элементы с типом number
  const numberInputs = document.querySelectorAll('input[type="number"]');

  // Перебираем найденные инпуты
  numberInputs.forEach((input) => {
    const value = input.value; // Получаем значение текущего инпута
    const numberValue = parseFloat(value); // Преобразуем значение в число

    // Создаем сообщение об ошибке
    let errorMessage = input.nextElementSibling;

    // Проверка для элемента с id "edad"
    if (input.id === "age") {
      // Проверка диапазона от 1 до 200 для элемента с id "edad"
      if (
        isNaN(numberValue) ||
        numberValue < 1 ||
        numberValue > 200 ||
        !Number.isInteger(numberValue)
      ) {
        if (!errorMessage) {
          errorMessage = document.createElement("span");
          errorMessage.classList.add("error-message");
          input.parentNode.insertBefore(errorMessage, input.nextSibling);
        }
        errorMessage.textContent =
          "Значение может быть только целая цифра от 1 до 200.";
        input.classList.add("error");
      } else {
        input.classList.remove("error");
        if (errorMessage) {
          errorMessage.remove();
        }
      }
    } else {
      // Общая проверка для всех других input[type="number"]
      if (
        isNaN(numberValue) ||
        numberValue < 1 ||
        numberValue > 10000000 ||
        !Number.isInteger(numberValue)
      ) {
        if (!errorMessage) {
          errorMessage = document.createElement("span");
          errorMessage.classList.add("error-message");
          input.parentNode.insertBefore(errorMessage, input.nextSibling);
        }
        errorMessage.textContent =
          "Значение может быть только целая цифра от 1 до 10000000.";
        input.classList.add("error");
      } else {
        input.classList.remove("error");
        if (errorMessage) {
          errorMessage.remove();
        }
      }
    }
  });
}

function render() {
  const brutto = parseFloat(document.getElementById("brutto").value.trim());
  const age = parseFloat(document.getElementById("age").value.trim());

  // Массив с числами для каждого элемента balance
  const numbers = [cuotaIRPF, bruttoAnual, socialRate, withholding, netoAnual];

  // Находим все элементы с классом .balance
  const balanceElements = document.querySelectorAll(".balance");

  // Перебираем каждый .balance и вставляем соответствующие числа и метки
  balanceElements.forEach((balanceElement, index) => {
    const integerElement = balanceElement.querySelector(".balance__integer");
    const fractionElement = balanceElement.querySelector(".balance__fraction");

    // Получаем число и текстовую метку для текущего .balance
    const number = numbers[index];

    // Разделение числа на целую и дробную части
    const integerPart = Math.floor(number); // Целая часть
    const fractionPart = (number - integerPart).toFixed(2).substring(2); // Дробная часть

    console.log(brutto, age, integerPart, fractionPart);

    // Проверяем, что integerElement и subElement существуют
    if (integerElement) {
      integerElement.textContent = integerPart;
    }
    if (fractionElement) {
      fractionElement.textContent = fractionPart;
    }
  });
}

// calculator //
