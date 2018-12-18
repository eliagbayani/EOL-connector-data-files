<?php

//orig fron Anne's original version Rank.java
$old = '{
    {"domain","superkingdom","kingdom","subkingdom","division","infrakingdom","superphylum"},
    {"phylum","subphylum","infraphylum","division","subdivision","superclass"},
    {"class","subclass","infraclass","subterclass","megacohort","supercohort","cohort","subcohort","infracohort","superorder"},
    {"order","suborder","infraorder","parvorder","section","subsection","series","subseries","superfamily","epifamily"},
    {"family","subfamily","supertribe","tribe","subtribe"},
    {"genus","subgenus","species group","species-group","species subgroup"},
    {"species","infraspecificname","subspecies","natio","variety","varietas","subvariety","form","forma","f.","subform","clade","cluster","paraphyletic group","polyphyletic group","no rank"},
}';

/*
updated by Eli Dec 18,2018: 
added 4 items that are existing from Katja's spreadsheet: https://docs.google.com/spreadsheets/d/1A08xM14uDjsrs-R5BXqZZrbI_LiDNKeO6IfmpHHc6wg/edit#gid=374242313
but not found in Anne's original version (Rank.java).
    "hyporder"
    "genus group"
    "infraspecies"
    "informal group"
*/

$new = '{
    {"domain","superkingdom","kingdom","subkingdom","division","infrakingdom","superphylum"},
    {"phylum","subphylum","infraphylum","division","subdivision","superclass"},
    {"class","subclass","infraclass","subterclass","megacohort","supercohort","cohort","subcohort","infracohort","superorder"},
    {"order","suborder","infraorder","parvorder","section","subsection","series","subseries","hyporder","superfamily","epifamily"},
    {"family","subfamily","supertribe","tribe","subtribe","genus group"},
    {"genus","subgenus","species group","species-group","species subgroup"},
    {"species","infraspecies","infraspecificname","subspecies","natio","variety","varietas","subvariety","form","forma","f.","subform","clade","cluster","paraphyletic group","polyphyletic group","informal group","no rank"},
}';
?>
