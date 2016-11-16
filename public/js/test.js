function JSClock(){
    var temps = new Date();
    var heures = temps.getHours();
    var minutes = temps.getMinutes();
    var secondes = temps.getSeconds();
    var calc = ""+(heures > 12)? heures-12 : heures;
    if(heures == 0)
        calc = "12";
    calc += ((minutes<10)? ":0": ":")+minutes;
    calc += ((secondes<10)? ":0": ":")+secondes;
    calc += (heures >= 12) ? " P.M." : " A.M.";
    return calc;
}