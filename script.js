//var apHorario = document.getElementById("horario");

function atualizarHorario(){
    var data = new Date().toLocaleString("pt-br", {
        timeZone: "America/Sao_Paulo"
    });
    //var formatarData  = data.replace(", ", " - ");
    //apHorario.innerHTML = formatarData;
    document.getElementById("horario").innerHTML = "Horário: " + data.replace(", ", " - ");
}

setInterval(atualizarHorario, 1000);