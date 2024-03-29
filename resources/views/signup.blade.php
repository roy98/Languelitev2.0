<x-layout>
    <x-slot:title>
        Sign up
    </x-slot>
    <div class="signup-container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>DJED - Inscription</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">1</span></h3>
                        <p class="step-number-content signup-active">Veuillez renseigner les informations de l'usager.</p>
                        <p class="step-number-content d-none">Êtes-vous le tuteur ? Merci de renseigner vos informations.</p>
                        <p class="step-number-content d-none">Remplissez les informations du profil.</p>
                    </div>
                    <ul class="signup-progress-bar">
                        <li class="signup-active">Identification usager</li>
                        <li>Tuteur</li>
                        <li>Profil</li>
                    </ul>
                </div>
                <div class="right-side">
                    <div class="signup-main signup-active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Information de l'usager</h2>
                            <p>Veuillez renseigner les informations de l'usager. Les champs avec (*) sont obligatoires</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="user_name"> <span>Nom usager *</span> </div>
                            <div class="input-div"> <input type="text" required> <span>Prénom usager</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="email" required> <span>Courriel usager</span> </div>
                            <div class="input-div"> <input type="email" required> <span>Confirmer courriel</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <div class="input-div"> <input type="date" value="2000-01-01" required require id="dob"> <span>Date naissance usager *</span> </div>
                            </div>
                            <div class="input-div">
                                <select required require>
                                    <option>Choisir Pays *</option>
                                    <option>Cameroun</option>
                                    <option>Canada</option>
                                    <option>Germany</option>
                                    <option>Russia</option>
                                    <option>UK</option>
                                    <option>USA</option>
                                </select>
                            </div>
                        </div>
                        <div class="signup-buttons"> <button class="next_button">Next Step</button> </div>
                    </div>
                    <div class="signup-main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Tuteur</h2>
                            <p>Êtes-vous le tuteur ? Merci de renseigner vos informations. Les champs avec (*) sont obligatoires</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Utiliser les informations de l'usager?
                            </label>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="tuteur_name"> <span>Nom tuteur *</span> </div>
                            <div class="input-div"> <input type="text" required> <span>Prénom tuteur</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="email" required require> <span>Courriel tuteur *</span> </div>
                            <div class="input-div"> <input type="email" required> <span>Confirmer courriel *</span> </div>
                            <div class="input-div"> <input type="password" required require> <span>Mot de passe *</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="tel" required require> <span>Téléphone tuteur *</span> </div>
                            <div class="input-div"> <input type="tel" required> <span>Confirmer Téléphone</span> </div>
                        </div>
                        <div class="signup-buttons button_space"> <button class="back_button">Back</button> <button class="next_button">Next Step</button> </div>
                    </div>
                    <div class="signup-main">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Profil</h2>
                            <p>Remplissez les informations du profil.</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="alias"> <span>Alias *</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="password" required require> <span>Mot de passe *</span> </div>
                            <div class="input-div"> <input type="password" required require> <span>Confirmer mot de passe *</span> </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select required require>
                                    <option>Langue officielle *</option>
                                    <option>Français</option>
                                    <option>Anglais</option>
                                </select>
                            </div>
                            <div class="input-div">
                                <select required require>
                                    <option>Langue préférée *</option>
                                    <option>Ghomala</option>
                                    <option>Yemba</option>
                                    <option>Medumba</option>
                                    <option>Swahili</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select required require>
                                    <option>Question secrète *</option>
                                    <option>Quel est votre livre préféré ?</option>
                                    <option>Quel est votre plat favori ?</option>
                                    <option>Le nom de votre animal de compagnie ?</option>
                                </select>
                            </div>
                            <div class="input-div"> <input type="text" required require> <span>Réponse secrete *</span> </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Réponse secrete</label>
                            </div>
                        </div>
                        <div class="signup-buttons button_space"> <button class="back_button">Back</button> <button class="next_button">Next Step</button> </div>
                    </div>
                    <div class="signup-main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                        <div class="text congrats">
                            <h2>Félicitations!</h2>
                            <p>Merci Mr./Mrs. <span class="shown_name"></span> Vos informations ont été soumises avec succès pour la référence future, nous vous contacterons bientôt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>