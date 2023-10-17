<?php

$dictionary["Account"]["indices"][] = array(
    "name"   => "index_qualia_unique_hash_index",
    "type"   => "index",
    "fields" => array(
        "qualia_unique_hash",
    ),
);

$dictionary["Account"]["indices"][] = array(
    "name"   => "index_qualia_unique_hash_deleted_index",
    "type"   => "index",
    "fields" => array(
        "qualia_unique_hash",
        "deleted",
    ),
);

$dictionary["Account"]["indices"][] = array(
    "name"   => "index_qualia_id_index",
    "type"   => "index",
    "fields" => array(
        "qualia_id",
    ),
);

$dictionary["Account"]["indices"][] = array(
    "name"   => "index_qualia_id_deleted_index",
    "type"   => "index",
    "fields" => array(
        "qualia_id",
        "deleted",
    ),
);
