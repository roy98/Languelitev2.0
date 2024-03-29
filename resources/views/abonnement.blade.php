<x-layout>
    <x-slot:title>
        Abonnement
    </x-slot>
    <div class="signup-container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>DJED - Abonnement</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">1</span></h3>
                        <p class="step-number-content signup-active">Informations du Bouquet</p>
                        <p class="step-number-content d-none">Informations du comptes</p>
                    </div>
                    <ul class="signup-progress-bar">
                        <li class="signup-active">Bouquet</li>
                        <li>Compte</li>
                    </ul>
                </div>
                <div class="right-side">
                    <div class="signup-main signup-active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Informations du bouquet</h2>
                            <p>Veuillez renseigner les informations du bouquet. Les champs avec (*) sont obligatoires</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="bouquet_name"> <span>Nom du bouquet *</span></div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="parrain_name"> <span>Nom parrain *</span></div>
                            <div class="input-div"> <input type="text" required id="parrain_surname"> <span>Prénom parrain</span></div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="tel" required require> <span>Téléphone parrain *</span> </div>
                            <div class="input-div"> <input type="email" required> <span>Courriel parrain</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select required require>
                                    <option>Type bouquet *</option>
                                    <option>Type A</option>
                                    <option>Type B</option>
                                    <option>Type C</option>
                                    <option>Type D</option>
                                    <option>Type Z</option>
                                </select>
                            </div>
                            <div class="input-div">
                                <select required require>
                                    <option>Langue bouquet *</option>
                                    <option>Ghomala</option>
                                    <option>Yemba</option>
                                    <option>Medumba</option>
                                    <option>Swahili</option>
                                </select>
                            </div>
                        </div>
                        <div class="signup-buttons"> <button class="next_button">Next Step</button> </div>
                    </div>
                    <div class="signup-main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Informations du Compte</h2>
                            <p>Veuillez renseigner les informations du bouquet. Les champs avec (*) sont obligatoires</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required> <span>Nom du compte</span></div>
                            <div class="input-div"> <input type="text" required require> <span>Alias du propriétaire *</span></div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required disabled> <span>Numéro du bouquet</span></div>
                            <div class="input-div"> <input type="text" required disabled> <span>Nom du bouquet</span></div>
                            <div class="input-div"> <input type="text" required disabled> <span>Langue</span></div>
                        </div>
                        <div class="signup-buttons button_space"> <button class="back_button">Back</button> <button class="next_button">Submit</button> </div>
                    </div>
                    <div class="signup-main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                        <div class="text congrats">
                            <h2>Félicitations!</h2>
                            <p><span class="shown_name"></span> Votre abonnement vient d'être créé avec succès.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>