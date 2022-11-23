@extends('app')

@section('register')
<form method="POST" action="{{ route('register') }}"  class="register">
    <h2>Inscription</h2>
    <div class="register-1">
        <div class="form-register">
            @csrf
            <div class="div-1" id="div-1">
                <div class="div-1-1">
                    <div class="nom">
                        <label>Nom</label>
                    </div>
                    <div class="nom_1">
                        <input type="texte" name="nom" class="input" autofocus required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom">
                        <label>Post nom</label>
                    </div>
                    <div class="nom_1">
                        <input type="texte" name="postnom" class="input" required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom">
                        <label>Prénom</label>
                    </div>
                    <div class="nom_1">
                        <input type="texte" name="prenom" class="input" required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom">
                        <label>Sexe</label>
                    </div>
                    <div class="nom_1">
                        <input type="radio" name="sexe" value="masculin" class="sexe">
                        <label class="label">Masculin</label>
                        <input type="radio" name="sexe" value="feminin" class="sexe">
                        <label class="label">Féminin</label>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom">
                        <label>Etat civil</label>
                    </div>
                    <div class="nom_1">
                        <input type="radio" name="etat_civil" value="celibataire" class="sexe">
                        <label class="label">Célibataire</label>
                        <input type="radio" name="etat_civil" value="marier" class="sexe">
                        <label class="label">Marié(e)</label>
                        <input type="radio" name="etat_civil" value="divorce" class="sexe">
                        <label class="label">Divorcé(e)</label>
                        <input type="radio" name="etat_civil" value="veuf" class="sexe">
                        <label class="label">Veuf(ve)</label>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom">
                        <label>Adresse</label>
                    </div>
                    <div class="nom_1">
                        <input type="texte" name="adresse" class="input" required>
                    </div>
                </div>
            </div>
            
            <div class="div-1">
                <div class="div-1-1">
                    <div class="nom_2">
                        <label>Email</label>
                    </div>
                    <div class="nom_3">
                        <input type="email" name="email" class="input" required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom_2">
                        <label>Téléphone 1</label>
                    </div>
                    <div class="nom_3">
                        <input type="tel" name="contact_1" class="input" required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom_2">
                        <label>Téléphone 2</label>
                    </div>
                    <div class="nom_3">
                        <input type="tel" name="contact_2" class="input" placeholder="facultatif">
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom_2">
                        <label>Mot de passe</label>
                    </div>
                    <div class="nom_3">
                        <input type="password" name="password" class="input" required>
                    </div>
                </div>
                <div class="div-1-1">
                    <div class="nom_2">
                        <label>Confirmer mot de passe</label>
                    </div>
                    <div class="nom_3">
                        <input type="password" name="password_confirmation" class="input" required autocomplete="new-password">
                    </div>
                </div>
                <div class="div-1-1">
                    @if($users)
                        @if(Session::has('erreur'))
                            <div class="message_erreur">
                                {{ Session::get('erreur') }}
                            </div>
                        @else
                            <div class="nom_2">
                                <label>Code d'autorisation</label>
                            </div>
                        @endif
                        <div class="nom_3">
                            <input type="tel" name="code" class="input" required>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="register-2">
        <button type="submit" class="btn-inscrit">Enregistrer</button>
    </div>
</form>
@endsection
