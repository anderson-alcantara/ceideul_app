function openNav() {

    var mediaqueryList = window.matchMedia("(min-width: 800px)");
    if(mediaqueryList.matches) {
            document.getElementById("mySidebar").style.width = "15%";
    document.getElementById("main").style.width = "85%";
    document.getElementById("main").style.marginLeft = "200px";
      }else{
        document.getElementById("mySidebar").style.width = "25%";
        document.getElementById("main").style.width = "75%";
        document.getElementById("main").style.marginLeft = "190px";

      }
  }


  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.width = "100%";
    document.getElementById("main").style.marginLeft = "0";
  }
  function onOpenAbout(){
    window.location.href="quienes_somos.html"
  }
  function onOpenMision(){
    window.location.href="mision.html"
  }
  function onOpenVision(){
    window.location.href="vision.html"
  }

  function onOpenform(form){
    var frame=document.getElementById('frameforms');
    var content= document.getElementById('othercontent');
    frame.style.visibility = "visible";
    content.style.visibility = "hidden";
    switch(form){
      case "f_diagAsesoria":
        frame.src="forms/f_diagAsesoria.html";
        break;
        case "f_inicioAsesoriaEmp":
        frame.src="forms/f_inicioAsesoriaEmp.html";
        break;
        case "f_EntregaAsesoria":
        frame.src="forms/f_EntregaAsesoria.html";
        break;
        case "f_DiagAppOfimatica":
        frame.src="forms/f_DiagAppOfimatica.html";
        break;
        case "f_diagAsesoria":
        frame.src="forms/f_diagAsesoria.html";
        break;
        case "f_AnalisisDisePtrabajo":
          frame.src="forms/f_AnalisisDisePtrabajo.html";
          break;
        case "f_perfilacion":
        frame.src="forms/f_perfilacion.html";
        break;
        case "f_analisis":
          frame.src="forms/f_analisis.html";
          break;
        case "f_balance":
          frame.src="forms/f_balance.html";
          break;
          case "f_ishikawa":
            frame.src="forms/f_ishikawa.html";
            break;


    }
    
  }
  

