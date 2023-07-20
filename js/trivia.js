const questions = [
  {
    question: "¿Cuál es el horario de atención de la cafetería y qué días de la semana está abierta?",
    options: ["De lunes a viernes de 7:00 a.m. a 7:00 p.m.", "De martes a domingo de 8:00 a.m. a 6:00 p.m.", "De lunes a sábado de 6:00 a.m. a 9:00 p.m.", "De lunes a domingo de 8:00 a.m. a 8:00 p.m."],
    answer: 3
  },
  {
    question: "¿Cuáles son los tipos de café más populares que se ofrecen en la cafetería y cuál es el más recomendado?",
    options: ["Café americano, Café expreso y Café con leche. El más recomendado es el Café expreso.", "Café moca, Café con leche y Café frappé. El más recomendado es el Café frappé.", "Café capuchino, Café latte y Café irlandés. El más recomendado es el Café capuchino.", "Café cortado, Café macchiato y Café lungo. El más recomendado es el Café cortado."],
    answer: 0
  },
  {
    question: "¿Tienen opciones de comida para acompañar el café, como pasteles, galletas o sándwiches? ¿Cuáles son las especialidades?",
    options: ["Sí, ofrecen una amplia variedad de pasteles caseros y deliciosos sándwiches preparados al momento.", "No, la cafetería solo se dedica a la venta de café y bebidas.", "Sí, tienen galletas y postres, pero no ofrecen sándwiches.", "Sí, ofrecen bocadillos y pastas, pero no pasteles."],
    answer: 0
  },
  {
    question: "¿La cafetería ofrece opciones de café descafeinado o bebidas alternativas para aquellos que no consumen cafeína?",
    options: ["Sí, tienen una selección de café descafeinado y bebidas a base de leche y chocolate.", "No, solo sirven café regular con cafeína.", "Sí, ofrecen té y otras infusiones, pero no tienen opciones descafeinadas.", "Sí, tienen bebidas frías sin cafeína, pero no ofrecen opciones calientes."],
    answer: 0
  },
  {
    question: "¿Existe algún programa de lealtad o tarjeta de membresía para clientes frecuentes que ofrezca descuentos u otras ventajas?",
    options: ["Sí, tienen un programa de lealtad donde los clientes acumulan puntos que pueden canjear por descuentos y regalos.", "No, la cafetería no ofrece ningún programa de recompensas.", "Sí, tienen una tarjeta de membresía exclusiva que ofrece descuentos en todas las compras.", "Sí, ofrecen descuentos a los clientes frecuentes, pero no tienen un programa de puntos."],
    answer: 0
  }
];

function startTrivia() {
  document.getElementById("start-button").style.display = "none";
  document.getElementById("question-container").style.display = "block";
  document.getElementById("next-button").style.display = "none";
  document.getElementById("timer").style.display = "block";
  showQuestion();
}

let currentQuestion = 0;
let correctAnswers = 0; // Contador de respuestas correctas
const requiredCorrectAnswers = 3; // Número mínimo de respuestas correctas para ganar
const questionContainer = document.getElementById("question-container");
const questionElement = document.getElementById("question");
const optionsElement = document.getElementById("options");
const timerElement = document.getElementById("timer");
let timer;

function showQuestion() {
  resetTimer();

  const question = questions[currentQuestion];
  questionElement.textContent = question.question;

  while (optionsElement.firstChild) {
    optionsElement.removeChild(optionsElement.firstChild);
  }

  question.options.forEach((option, index) => {
    const li = document.createElement("li");
    li.classList.add("option");
    li.textContent = option;
    li.addEventListener("click", () => checkAnswer(index));
    optionsElement.appendChild(li);
  });

  startTimer();
}

function startTimer() {
  let timeLeft = 10000;
  timerElement.textContent = `Tiempo restante: ${timeLeft}`;

  timer = setInterval(() => {
    timeLeft--;
    timerElement.textContent = `Tiempo restante: ${timeLeft}`;

    if (timeLeft === 0) {
      clearInterval(timer);
      alert("¡Se acabó el tiempo! Has perdido la trivia.");
      endTrivia();
    }
  }, 1000);
}

function resetTimer() {
  clearInterval(timer);
  timerElement.textContent = `Tiempo restante: 10`;
}

function checkAnswer(userAnswer) {
  const correctAnswer = questions[currentQuestion].answer;

  if (userAnswer === correctAnswer) {
    alert("¡Respuesta correcta!");
    correctAnswers++;
  } else {
    alert("Respuesta incorrecta. La respuesta correcta era la opción " + (correctAnswer + 1));
  }

  resetTimer();
  currentQuestion++;

  if (currentQuestion < questions.length) {
    showQuestion();
  } else {
    endTrivia();
  }
}

function endTrivia() {
  if (correctAnswers >= requiredCorrectAnswers) {
    document.getElementById("question-container").style.display = "none";
    document.getElementById("next-button").style.display = "none";
    document.getElementById("timer").style.display = "none";
    document.getElementById("congratulations-message").style.display = "block";
  } else {
    document.getElementById("question-container").style.display = "none";
    document.getElementById("next-button").style.display = "none";
    document.getElementById("timer").style.display = "none";
    document.getElementById("retry-message").style.display = "block";
  }

  correctAnswers = 0;
  currentQuestion = 0;
  showQuestion();
}

function nextQuestion() {
  if (currentQuestion >= questions.length) {
    endTrivia();
  } else {
    showQuestion();
  }
}

showQuestion();