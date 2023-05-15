<?php

function get_data($cat)
{
    $db = new SQLite3('db.sqlite');
    $res = array();
    $req = $db->prepare('SELECT * FROM produits WHERE categorie=:cat');

    $req->bindValue(':cat', $cat);
    $results = $req->execute();

    while ($row = $results->fetchArray()) {
        array_push($res, $row);
    }

    $db->close();

    return $res;
}

function get_all()
{
    $db = new SQLite3('db.sqlite');
    $res = array();
    $req = $db->prepare('SELECT * FROM produits');

    $results = $req->execute();

    while ($row = $results->fetchArray()) {
        array_push($res, $row);
    }

    $db->close();

    return $res;
}


function update_stock($nom, $stock)
{
    $db = new SQLite3('db.sqlite');
    $req = $db->prepare('UPDATE produits SET stock= :stock WHERE nom=:nom');

    $req->bindValue(':nom', $nom);
    $req->bindValue(':stock', $stock);
    $req->execute();

    $db->close();
}

