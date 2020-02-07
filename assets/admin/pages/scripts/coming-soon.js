
var ComingSoon = function () {

    return {
        //main function to initiate the module
        init: function () {
            var austDay = new Date();
            austDay = new Date(austDay.getFullYear() + 1, 1 - 1, -300);
            $('#defaultCountdown').countdown({
                labels: ['Année', 'Mois', 'Semaines', 'Jours', 'Heures', 'Minutes', 'Secondes'], 
                labels1: ['Année', 'Mois', 'Semaine', 'Jour', 'Heure', 'Minute', 'Seconde'], 
                until: austDay});

            
            $('#year').text(austDay.getFullYear());
        }

    };

}();

