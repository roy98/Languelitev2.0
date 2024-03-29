<x-layout>
    <x-slot:title>
        Payments
    </x-slot>
    <div class="signup-container">
        <div class="card">
            <div class="form">
                <div class="left-side">
                    <div class="left-heading">
                        <h3>DJED - Payment</h3>
                    </div>
                    <div class="steps-content">
                        <h3>Step <span class="step-number">1</span></h3>
                        <p class="step-number-content signup-active">Gerer vos payments</p>
                    </div>
                    <ul class="signup-progress-bar">
                        <li class="signup-active">Payment</li>
                    </ul>
                </div>
                <div class="right-side">
                    <div class="signup-main signup-active">
                        <small><i class="fa fa-smile-o"></i></small>
                        <div class="text">
                            <h2>Informations de Paiement</h2>
                            <p>Veuillez complétez les champs ci-dessous. Les champs avec (*) sont obligatoires</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required require id="user_alias"> <span>Alias *</span></div>
                            <div class="input-div">
                                <select required require>
                                    <option>Choisissez un compte *</option>
                                    <option>Compte 1</option>
                                    <option>Compte 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" disabled required id="abo_new"> <span>Abonnement en cours</span></div>
                            <div class="input-div">
                                <select required require>
                                    <option>Type transaction *</option>
                                    <option>MTN</option>
                                    <option>ORANGE</option>
                                    <option>INTERAC</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"> <input type="text" required id="pay_montant"> <span>Référent</span></div>
                            <div class="form-check form-switch input-div">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Inconnu ?</label>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select required require>
                                    <option>Monnaie *</option>
                                    <option>Dollar CAD</option>
                                    <option>XAF</option>
                                </select>
                            </div>
                            <div class="input-div"> <input type="text" required require id="pay_montant"> <span>Montant</span></div>
                        </div>
                        <div class="signup-buttons"> <button class="next_button">Submit</button> </div>
                    </div>
                    <div class="signup-main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                        <div class="text congrats">
                            <h2>Félicitations!</h2>
                            <p><span class="shown_name"></span> Votre paiement vient d'être éffectué avec succès.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>