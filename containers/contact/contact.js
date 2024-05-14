const form = document.getElementById("contactForm");
const alert = document.querySelector(".alert");

const firebaseConfig = {
  apiKey: "AIzaSyA2-kpMCTcymfPJbEWWv8cJKpUh1vAkGvg",
  authDomain: "medacverso-a8852.firebaseapp.com",
  databaseURL: "https://medacverso-a8852-default-rtdb.firebaseio.com/",
  projectId: "medacverso-a8852",
  storageBucket: "medacverso-a8852.appspot.com",
  messagingSenderId: "565098211725",
  appId: "1:565098211725:web:581ca0b96eae21be1375c4",
  measurementId: "G-58FE7BH6GJ",
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const database = firebase.database();

const ref = database.ref("messages");

form.addEventListener("submit", (e) => {
  e.preventDefault();

  const nombre = document.getElementById("nombre").value;
  const telefono = document.getElementById("telefono").value;
  const email = document.getElementById("email").value;
  const cp = document.getElementById("cp").value;
  const pregunta = document.getElementById("pregunta").value;
  const check1 = document.getElementById("check1").checked;
  const check2 = document.getElementById("check2").checked;

  ref.push({
    nombre: nombre,
    telefono: telefono,
    email: email,
    cp: cp,
    pregunta: pregunta,
    check1: check1,
    check2: check2,
  });

  alert.style.display = "block";
  setTimeout(() => {
    alert.style.display = "none";
  }, 5000);
  form.reset();
});
