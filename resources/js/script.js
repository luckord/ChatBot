//Cargamos los elementos del Html en variables
const btnEnviar = document.getElementById("btnEnviar");
const consulta = document.getElementById("consulta");

const getMessage = (msg) => {
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      const response = xhr.responseText;
      const chatBody = document.querySelector(".scroller");
      const divCpu = document.createElement("div");
      divCpu.className = "alicia visible";
      divCpu.innerHTML = response;
      const divUser = document.createElement("div");
      divUser.className = "me visible";
      divUser.textContent = msg;
      chatBody.append(divUser);
      setTimeout(() => {
        chatBody.append(divCpu);
      }, 600);
    }
  };
  xhr.open("GET", "control/consulta_control.php?msg=" + msg, true);
  xhr.send();
};

btnEnviar.addEventListener("click", (e) => {
  e.preventDefault();
  if (consulta.value === "") {
    alert("Ingrese un mensaje valido!!");
  } else {
    getMessage(consulta.value);
    consulta.value = "";
  }
});

