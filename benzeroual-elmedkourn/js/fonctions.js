function mouseOver(obj) {
    obj.width="350";
  }
  
  function mouseOut(obj) {
    obj.width="300";
  }

var couronne = 0;
var prixcouronne = 0;
var prixpainrond = 0; 
var painrond = 0;
var baguette = 0;
var prixbaguette = 0;
var cpb = prixbaguette + prixcouronne + prixpainrond;

  function click1() {
    prixbaguette = prixbaguette + 1.07;
    baguette = baguette + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une baguette");

  }


  function click2() {
    prixpainrond = prixpainrond + 1.56;
    painrond = painrond + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un pain rond");
  }

  function click3() {
    prixcouronne = prixcouronne + 1.33;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une couronne bordelaise");
  }


  function click4() {
    prixcouronne = prixcouronne + 1.41;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un bagel");
  }


  function click5() {
    prixcouronne = prixcouronne + 1.55;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un pain multigrain ");
  }

  function click6() {
    prixcouronne = prixcouronne + 6;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un paris brest ");
  }

  function click7() {
    prixcouronne = prixcouronne + 2.5;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un macaron ");
  }

  function click8() {
    prixcouronne = prixcouronne + 3;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un éclair ");
  }

  function click9() {
    prixcouronne = prixcouronne + 4;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un millefeuille ");
  }

  function click10() {
    prixcouronne = prixcouronne + 10;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une forêt noire ");
  }

  function click11() {
    prixcouronne = prixcouronne + 1.50;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un croissant ");
  }

  function click12() {
    prixcouronne = prixcouronne + 2;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une baguette viennoise ");
  }

  function click13() {
    prixcouronne = prixcouronne + 3;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier un pain au chocolat ");
  }

  function click14() {
    prixcouronne = prixcouronne + 4;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une brioche ");
  }

  function click15() {
    prixcouronne = prixcouronne + 10;
    couronne = couronne + 1;
    cpb = prixbaguette + prixcouronne + prixpainrond;
    alert("vous avez ajouté au panier une tarte tatin ");
  }

  function clickConnexion() {
    <a href="index.php">Accueil</a>
  }
