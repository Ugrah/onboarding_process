<div class="top_bar_right_wrapper">
    <a href class="button button_theme button_js action_button dropdown noredirect" style=" background-color: #0C9CB2;">
        <span class="button_label">Espace Client</span>
        <div class="dropdown-content">
            <a href="#">Vérifier un chèque</a>
            <a href="#">Consulter le solde</a>
            <a href="#">Consulter l’historique</a>
        </div>
    </a>
    <a href="?page=onboarding" class="button action_button" target="_blank">
        <span class="button_label">S'inscrire</span>
    </a>
    <!-- <div class="dropdown">
        <button class="button turquoise">Espace Client</button>
        <div class="dropdown-content">
            <a href="#">Vérifier un chèque</a>
            <a href="#">Consulter le solde</a>
            <a href="#">Consulter l’historique</a>
        </div>
    </div> -->

    <!-- <div class="dropdown">
        <button class="button button_theme">S'inscrire</button>
    </div> -->


</div>

<script>

(function($) {
    
    $('.noredirect').on('click', function(e) {

        e.preventDefault();

        console.log('test');
    });
})(jQuery);

 

</script>

<style>
    .turquoise{
        background-color: rgb(48, 160, 161);
    }
    .mt-20 {
        margin-top: 20px;
    }
    .dropbtn {
    background-color: rgb(48, 160, 161);
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>