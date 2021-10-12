function valider()
{
    var res = true;
    var str = "<ol>";

    var leprenom = document.getElementsByName("prenom")[0].value;
    var lenom = document.getElementsByName("nom")[0].value;
    var lelogin = document.getElementsByName("login")[0].value;
    var lepwd = document.getElementsByName("mdp")[0].value;
    var conflepwd = document.getElementsByName("mdp2")[1].value;

    // le prénom existe ?
    if (leprenom.length == 0)
    {
        str += "<li>prenom vide !</li>";
        res = false;
    }

    // le nom existe ?
    if (lenom.length == 0)
    {
        str += "<li>nom vide !</li>";
        res = false;
    }

    // le login existe ?
    if (lelogin.length == 0)
    {
        str += "<li>login vide</li>";
        res = false;
    }

    if (lepwd != conflepwd)
    {
        str += "<li>vos mots de passe sont différents</li>";
        res = false;
    }

    str += "</ol>";

    document.getElementById("erreurs").innerHTML = str;

    return res;
}
