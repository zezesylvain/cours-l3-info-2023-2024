//<script type="text/javascript">
    /**
     * Permet d'envoyer des donn?es en GET ou POST en utilisant les XmlHttpRequest
     */
    function sendData(param, page, pos)
    {
        if (document.all)
        {
            //Internet Explorer
            var XhrObj = new ActiveXObject("Microsoft.XMLHTTP");
        }//fin if
        else
        {
            //Mozilla
            var XhrObj = new XMLHttpRequest();
        }//fin else

        //d?finition de l'endroit d'affichage:
        var content = document.getElementById(pos);

        XhrObj.open("POST", page);

        //Ok pour la page cible
        XhrObj.onreadystatechange = function()
        {
            if ((XhrObj.readyState == 4) && (XhrObj.status == 200))
                content.innerHTML = XhrObj.responseText;
        }
        XhrObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        XhrObj.send(param);
    }//fin fonction SendData