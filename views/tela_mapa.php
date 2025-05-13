<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/style.css">
  <title>Mapa</title>
</head>
<body>
<header>
  <img src="../assets/img/mcm-logo.png" alt="logo-etec">
  <h1>Mapa</h1>
  <img src="../assets/img/cps-logo.png" alt="logo-cps">
</header>


<section id="Locais" class="pagina">
    <div class="titulo"><p class="stands">Locais</p></div>
    <main>
        <div>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('BlocoA')"><p>Bloco A</p><div class="dots-3"></div></a><br>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('BlocoB')"><p>Bloco B</p><div class="dots-3"></div></a><br>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('Patio')"><p>Pátio</p><div class="dots-3"></div></a><br>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('Bibliotecas')"><p>Biblioteca</p><div class="dots-3"></div></a><br>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('Auditorio')"><p>Auditório</p><div class="dots-3"></div></a><br>
            <a href="#" class="btn-3 btn" onclick="mostrarPagina('Quadra')"><p>Quadra</p><div class="dots-3"></div></a>
        </div>
    </main>
</section>


    <section id="Sala1A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 1</p></div>
        <main>
    <div class="home-holder"> <!---Abre div 1--->
      <div class="home-conteiner"><!---Abre div 2--->
        <div class="corpo"></div>
        <div class="stands"> <!---Abre div 3--->
          <div class="stand">Stand 1<br>Nome projeto</div>
          <div class="stand">Stand 2<br>Nome projeto</div>
          <div class="stand">Stand 1<br>Nome projeto</div>
          <div class="stand">Stand 2<br>Nome projeto</div>
          <div class="stand">Stand 1<br>Nome projeto</div>
          <div class="stand">Stand 2<br>Nome projeto</div>
          <div class="stand">Stand 1<br>Nome projeto</div>
          <div class="stand">Stand 2<br>Nome projeto</div>
        <!-- outros stands -->

        </div> <!---Fecha div 3--->
        </div> <!---Fecha div 2--->
      </div> <!---Fecha div 1--->
    </div> 
    </main>
    </section>
    
    
    
    <section id="BlocoA" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="titulo-e">Bloco A</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner-bloco-b">
  <div class="mapa-blocoo">
    <div class="linha-superior">
    <div class="quadro">📋</div>
    <div class="salass">
      <div class="salaa" onclick="mostrarPagina('Sala8A')">Sala 8</div>
      <div class="salaa" onclick="mostrarPagina('Sala7A')">Sala 7</div>
      <div class="salaa" onclick="mostrarPagina('Sala6A')">Sala 6</div>
    </div>
  </div>
  <div class="linha-meio">
    <div class="salass">
      <div class="salaa" onclick="mostrarPagina('Sala1A')">Sala 1</div>
      <div class="salaa" onclick="mostrarPagina('Sala2A')">Sala 2</div>
    </div>
    <div class="salass">
      <div class="salaa" onclick="mostrarPagina('Sala3A')">Sala 3</div>
      <div class="salaa" onclick="mostrarPagina('Sala4A')">Sala 4</div>
      <div class="salaa" onclick="mostrarPagina('Sala5A')">Sala 5</div>
    </div>
  </div>
  <div class="escadass">
      <div class="escadaa">🪜</div>
      <div class="escadaa">🪜</div>
    </div>
  <div class="linha-inferior">
    <div class="banheiroo">🚹</div>
    <div class="central">📷</div>
    <div class="banheiroo">🚺</div>
  </div>
</div>

  </div>
  </div></main>
    </section>
    
    <section id="BlocoB" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="titulo-e">Bloco B</p></div>
        <main><div class="home-holder">
<div class="home-conteiner-bloco-b">
  <div class="mapa-bloco">
    <div class="linha-salas">
      <div class="sala" onclick="mostrarPagina('Sala5B')">Sala 5</div>
      <div class="sala" onclick="mostrarPagina('Sala4B')">Sala 4</div>
      <div class="sala" onclick="mostrarPagina('Sala3B')">Sala 3</div>
      <div class="sala" onclick="mostrarPagina('Sala2B')">Sala 2</div>
      <div class="sala" onclick="mostrarPagina('Sala1B')">Sala 1</div>
    </div>
    <div class="lateral-esquerda">
      <div class="sala-6" onclick="mostrarPagina('Sala6B')">Sala 6</div>
    </div>
    <div class="icone tela">💧</div>
    <div class="icone elevador">🛗</div>
    <div class="icone escada">🪜</div>
    <div class="icone banheiro masc">🚹</div>
    <div class="icone banheiro fem">🚺</div>
  </div>
</div>
  </div>
  </div></main>
    </section>
    
    <section id="Locais" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="stands">Locais</p></div>
        <main><div>
    <a onclick="window.location.href='BlocoA.html'" class="btn-3 btn">
      <p>Bloco A</p>
      <div class="dots-3"></div>
    </a>
    <br>
    <a onclick="window.location.href='BlocoB.html'" class="btn-3 btn">
      <p>Bloco B</p>
      <div class="dots-3"></div>
    </a>
    <br>
    <a onclick="window.location.href='Patio.html'" class="btn-3 btn">
      <p>Pátio</p>
      <div class="dots-3"></div>
    </a>
    <br>
    <a onclick="window.location.href='Bibliotecas.html'" class="btn-3 btn">
      <p>Biblioteca</p>
      <div class="dots-3"></div>
    </a>
    <br>
    <a onclick="window.location.href='Auditorio.html'" class="btn-3 btn">
      <p>Auditório</p>
      <div class="dots-3"></div>
    </a>
    <br>
    <a onclick="window.location.href='Quadra.html'" class="btn-3 btn">
      <p>Quadra</p>
      <div class="dots-3"></div>
    </a> </div></main>
    </section>
    
    <section id="Patio" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="titulo-e">Pátio</p></div>
        <main><div class="home-holder">
<div class="home-conteiner patio">
  <div class="mapa-patio">
    <div class="esquerda">
      <div class="cantina">Cantina</div>
      <div class="patrocinios">
        <div class="patrocinio">Patrocínios</div>
        <div class="patrocinio">Patrocínios</div>
        <div class="patrocinio">Patrocínios</div>
        <div class="patrocinio">Patrocínios</div>
        <div class="patrocinio">Patrocínios</div>
      </div>
    </div>
    <div class="armarios">Armarios</div>
  </div>
</div>
  </div>
  </div></main>
    </section>
    
    <section id="Bibliotecas" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="history.back()">voltar</a>
        <div class="titulo"><p class="titulo-e">Biblioteca</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner-quadra">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 16<br>Nome projeto</div>
        <div class="stand">Stand 15<br>Nome projeto</div>
        <div class="stand">Stand 14<br>Nome projeto</div>
        <div class="stand">Stand 13<br>Nome projeto</div>
        <div class="stand">Stand 12<br>Nome projeto</div>
        <div class="stand">Stand 11<br>Nome projeto</div>
        <div class="stand">Stand 10<br>Nome projeto</div>
        <div class="stand">Stand 9<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <!-- outros stands -->
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Auditorio" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="titulo-e">Auditório</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner-quadra">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 16<br>Nome projeto</div>
        <div class="stand">Stand 15<br>Nome projeto</div>
        <div class="stand">Stand 14<br>Nome projeto</div>
        <div class="stand">Stand 13<br>Nome projeto</div>
        <div class="stand">Stand 12<br>Nome projeto</div>
        <div class="stand">Stand 11<br>Nome projeto</div>
        <div class="stand">Stand 10<br>Nome projeto</div>
        <div class="stand">Stand 9<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <!-- outros stands -->
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Quadra" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('Locais')">voltar</a>
        <div class="titulo"><p class="titulo-e">Quadra</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner-quadra">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 16<br>Nome projeto</div>
        <div class="stand">Stand 15<br>Nome projeto</div>
        <div class="stand">Stand 14<br>Nome projeto</div>
        <div class="stand">Stand 13<br>Nome projeto</div>
        <div class="stand">Stand 12<br>Nome projeto</div>
        <div class="stand">Stand 11<br>Nome projeto</div>
        <div class="stand">Stand 10<br>Nome projeto</div>
        <div class="stand">Stand 9<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <!-- outros stands -->
      </div>
    </div>
  </div>
  </div></main>
    </section>
    

<script>
function mostrarPagina(id) {
    document.querySelectorAll(".pagina").forEach(sec => sec.style.display = "none");
    document.getElementById(id).style.display = "block";
}
window.onload = function() {
    mostrarPagina("Locais");
}
</script>


</body>
</html>


<!----<section id="Sala1B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 1</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala2A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 2</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala2B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 2</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala3A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 3</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala3B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 3</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala4A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 4</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala4B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 4</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala5A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 5</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala5B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 5</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala6A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 6</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala6B" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoB')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 6</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 7<br>Nome projeto</div>
        <div class="stand">Stand 4<br>Nome projeto</div>
        <div class="stand">Stand 6<br>Nome projeto</div>
        <div class="stand">Stand 3<br>Nome projeto</div>
        <div class="stand">Stand 5<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 8<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala7A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 7</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    <section id="Sala8A" class="pagina" style="display:none">
        <a href="#" class="voltar" onclick="mostrarPagina('BlocoA')">voltar</a>
        <div class="titulo"><p class="titulo-e">Sala 8</p></div>
        <main><div class="home-holder">
    <div class="home-conteiner">
      <div class="corpo"></div>
      <div class="stands">
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
        <div class="stand">Stand 1<br>Nome projeto</div>
        <div class="stand">Stand 2<br>Nome projeto</div>
      </div>
    </div>
  </div>
  </div></main>
    </section>
    
    ----->
