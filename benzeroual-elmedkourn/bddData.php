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
