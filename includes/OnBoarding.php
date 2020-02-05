<div id="OnBoarding_Process" class="credit__">  
        
        <div class="close__onBoarding">
            <i class="icofont-close-line-squared"></i>
        </div>

        <header>
            <div class="c__slide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="OnBoarding/img/c1.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="OnBoarding/img/c2.png">
                    </div>
                    <div class="swiper-slide">
                        <img src="OnBoarding/img/c3.png">
                    </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </header>


        <section class="container upload__ice active">
            <div class="logo">
                <img src="OnBoarding/img/logo.png" alt="">
            </div>
            <h2>Bienvenue sur cette page de souscription de Checkinfo.</h2>
            <form action="" method="POST">

                <!--  -->
                <div class="credit__input">
                    <label for="ice">Veuillez saisir votre Identifiant Commun de l'Entreprise (ICE) <sup><i class="icofont-star-alt-2"></i></sup></label>
                    <input onkeydown="addIcon(this)" onblur="checkLength(this)" class="input" id="ice" type="text" placeholder="123456789000057" required maxlength="15" autocomplete="off" />
                    <i class=" input__load"></i>
                    <span class="msg-info"></span>
                </div>

                <script>
                    function checkLength(el) {
                        if (el.value.length == 15) {
                            console.log(el.value.length);
                            jQuery(".input__load").addClass("input__load_remove");
                            jQuery(".ice__result").fadeIn();

                        } else {
                            jQuery(".input__load").addClass("input__load_error");
                        }
                    }

                    function addIcon(el) {
                        jQuery(".input__load").addClass("icofont-spinner-alt-4");
                    }
                </script>
                <!--  -->

                <div class="credit__input attach__ice">
                    <label for="attached">Veuillez Attacher votre attestation ICE <sup><i class="icofont-star-alt-2"></i></sup>
                        <input class="file-input" type="file" id="attached" name="attached" required>
                        <i class="icofont-cloud-upload icon__upload"></i>
                    </label>
                    <span class="msg-info">Uniquement *.jpeg, *.png...</span>
                </div>



            </form>

            <div class="ice__result hide_result">
                <div class="ice__result--item">
                    <div class="ice__title">Nom et prénom/Raison sociale:</div>
                    <div>Info Check</div>
                </div>
                <div class="ice__result--item">
                    <div class="ice__title">Activité:</div>
                    <div>Conseil de gestion</div>
                </div>
                <div class="ice__result--item">
                    <div class="ice__title">Identifiant fiscal:</div>
                    <div>15282311</div>
                </div>
                <div class="ice__result--item">
                    <div class="ice__title">Centre RC:</div>
                    <div>Conseil de gestion</div>
                </div>
                <div class="ice__result--item">
                    <div class="ice__title">Numéro RC:</div>
                    <div>1336207</div>
                </div>
                <div class="ice__result--item">
                    <div class="ice__title">Adresse:</div>
                    <div>Boulevard d'Anfa Res ALWARD N 42 CASABLANCA</div>
                </div>

            </div>

        </section>

        <section class="container user__info">
            <div class="logo">
                <img src="OnBoarding/img/logo.png" alt="">
            </div>
            <h2>Merci de renseigner les informations de contact principal.</h2>

            <div>

                <div class="vous__">
                    <div class="vous__stat vous__ste active">
                        <i class="icofont-building-alt"></i>
                        <p>Societe</p>
                    </div>
                    <div class="vous__stat vous__libre">
                        <i class="icofont-bag-alt"></i>
                        <p>Profession liberale</p>
                    </div>
                    <div class="vous__stat vous__auto">
                        <i class="icofont-businessman"></i>
                        <p>Auto-entrepreneur</p>
                    </div>

                </div>


                <div class="both__input">
                    <div class="credit__input">
                        <label for="nom">Nom <sup><i class="icofont-star-alt-2"></i></sup></label>
                        <input class="input" id="nom" type="text" placeholder="John" required autocomplete="off" />
                        <span class="msg-info"></span>
                    </div>
                    <div class="credit__input">
                        <label for="prenom">Prenom<sup><i class="icofont-star-alt-2"></i></sup></label>
                        <input class="input" id="prenom" type="text" placeholder="Doe" required autocomplete="off" />
                        <span class="msg-info"></span>
                    </div>
                </div>

                <div class="credit__input">
                    <label for="adress">Adress</label>
                    <input class="input" id="adress" type="text" placeholder="Adress" required autocomplete="off" />
                    <span class="msg-info"></span>
                </div>
                <div class="both__input">
                    <div class="credit__input credit__select">
                        <label for="ville">Ville</label>
                        <select name="ville" id="ville">
                            <option value="">Casablanca</option>
                            <option value="">Rabat</option>
                            <option value="">Marrakech</option>
                        </select>
                    </div>
                    <div class="credit__input credit__select">
                        <label for="region">Region</label>
                        <select name="region" id="region">
                            <option value="">Region 1</option>
                            <option value="">Region 2</option>
                            <option value="">Region 3</option>
                            <option value="">Region 4</option>
                        </select>
                    </div>
                </div>

                <div class="both__input">
                    <div class="credit__input">
                        <label for="tel">Telephone <sup><i class="icofont-star-alt-2"></i></sup></label>
                        <input class="input" id="tel" type="tel" placeholder="" required autocomplete="off" />
                        <span class="msg-info"></span>
                    </div>
                    <div class="credit__input">
                        <label for="tel">SMS de Validation <sup><i style="color: transparent;" class="icofont-star-alt-2"></i></sup> </label>
                        <input class="input" id="prenom" type="text" placeholder="" required autocomplete="off" />

                    </div>
                </div>

                <div class="both__input">
                    <div class="credit__input">
                        <label for="email">Email <sup><i class="icofont-star-alt-2"></i></sup></label>
                        <input class="input" id="email" type="email" placeholder="" autocomplete="off" />
                        <span class="msg-info"></span>
                    </div>
                    <div class="credit__input">
                        <label for="email">Email de Validation <sup><i style="color: transparent;" class="icofont-star-alt-2"></i></sup> </label>
                        <input class="input" id="prenom" type="text" placeholder="" autocomplete="off" />

                    </div>
                </div>


            </div>
        </section>


        <section class="container pack__ste">
            <div class="logo">
                <img src="OnBoarding/img/logo.png" alt="">
            </div>
            <h2>Choix de l'abonnement.</h2>

            <div class="choix__list">

                <div class="choix__option">
                    <h4>Choix 1</h4>
                    <div class="choix__price">
                        <span>8250</span>
                        <span>MAD</span>
                    </div>
                    <div class="choix__details">
                        <div class="choix__details--item">
                            <p>Frais de getion</p>
                            <p>250</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Canal</p>
                            <p>Multicanal</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Volume</p>
                            <p>1000</p>
                        </div>
                    </div>
                    <button>Selectionner</button>
                </div>
                <div class="choix__option">
                    <h4>Choix 1</h4>
                    <div class="choix__price">
                        <span>4750</span>
                        <span>MAD</span>
                    </div>
                    <div class="choix__details">
                        <div class="choix__details--item">
                            <p>Frais de getion</p>
                            <p>250</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Canal</p>
                            <p>Multicanal</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Volume</p>
                            <p>1000</p>
                        </div>
                    </div>
                    <button>Selectionner</button>
                </div>
                <div class="choix__option">
                    <h4>Choix 1</h4>
                    <div class="choix__price">
                        <span>1250</span>
                        <span>MAD</span>
                    </div>
                    <div class="choix__details">
                        <div class="choix__details--item">
                            <p>Frais de getion</p>
                            <p>250</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Canal</p>
                            <p>Multicanal</p>
                        </div>
                        <div class="choix__details--item">
                            <p>Volume</p>
                            <p>1000</p>
                        </div>
                    </div>
                    <button>Selectionner</button>
                </div>
            </div>

        </section>

        <div class="credit__control">
            <button class="button2 back">Back</button>
            <button class="button1 next">Next</button>
        </div>

    </div>