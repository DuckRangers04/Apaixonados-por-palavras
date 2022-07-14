  
    solicitar = (elemento) => {
      elemento.value = "Livro solicitado";
      elemento.classList.replace("buttonSolicitar", "buttonSolicitado");
    }

function deleteRow(r) {
      var i = r.parentNode.parentNode.rowIndex;
      document.getElementById("notiTable").deleteRow(i);
    }