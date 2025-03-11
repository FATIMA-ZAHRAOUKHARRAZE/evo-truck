@extends('layout.navbar')

@section('url')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('content')
<style>
	body {
		font-family: Arial, sans-serif;
	}
.text-center1{
    color:#0d2471;
    text-align :center;
}
	.contact-section {
		padding: 40px 20px;
		background-color: #f8f9fa;
	}

	.contact-form {
		background-color: #ffffff;
		border-radius: 5px;
		padding: 20px;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}

	.contact-details {
		text-align: center;
	}

	.contact-details i {
		font-size: 24px;
		color: #007bff;
		margin-bottom: 10px;
	}

	.google-map-error {
		text-align: center;
		padding: 20px;
		border: 1px solid #e0e0e0;
		border-radius: 5px;
		background-color: #ffffff;
	}
</style>
</head>

<body>
	<div class="container contact-section">
		<h2 data-aos="fade-down" class="text-center1">{{ GoogleTranslate::trans('CONTACTEZ-NOUS', \App::getLocale()) }}</h2>
		<p data-aos="fade-down" class="text-center">
	{{ GoogleTranslate::trans(
    "Vous avez des questions ou besoin d'aide ? Contactez-nous en utilisant le formulaire de contact ci-dessous. 
    Notre équipe du Groupe EVO MACHINERY est là pour vous aider.", 
    \App::getLocale()
) }}

		</p>

		<div class="mt-4 row">
			<!-- Formulaire de contact -->
			<div class="col-md-6">
			    	<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
				<form data-aos="fade-right" class="contact-form" action={{ route('contact.send') }} method="POST">
					@csrf
					<div class="mb-3">
						<label for="fullName" class="form-label">{{ GoogleTranslate::trans('Nom', \App::getLocale()) }}</label>
						<input type="text" class="form-control" id="Nom" name="Nom" placeholder="{{ GoogleTranslate::trans('Nom', \App::getLocale()) }}">
						 @error('Nom')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
					</div>
					<div class="mb-3">
						<label for="emailAddress" class="form-label">{{ GoogleTranslate::trans('Email', \App::getLocale()) }} </label>
						<input type="email" class="form-control" id="Email" name="Email"  placeholder="{{ GoogleTranslate::trans('Email', \App::getLocale()) }}">
						 @error('Email')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
					</div>
					<div class="mb-3">
						<label for="subject" class="form-label">{{ GoogleTranslate::trans('Sujet', \App::getLocale()) }} </label>
						<input type="text" class="form-control" id="Sujet" name="Sujet" placeholder="{{ GoogleTranslate::trans('Sujet', \App::getLocale()) }}">
						 @error('Sujet')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
					</div>
					<div class="mb-3">
						<label for="message" class="form-label">{{ GoogleTranslate::trans('Message', \App::getLocale()) }}</label>
						<textarea class="form-control" id="Message" name="Message" rows="5" placeholder="{{ GoogleTranslate::trans('Message', \App::getLocale()) }}"></textarea>
						 @error('Message')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
					</div>
					
					<div class="mb-3">
                            <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"> </div>
                            @error('g-recaptcha-response')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror 
                        </div> 
					<button type="submit" class="btn btn-primary w-100">{{ GoogleTranslate::trans('Envoie Message', \App::getLocale()) }}</button>
				</form>
				
			</div>
			 

			<!-- Carte Google et informations -->
			<div class="col-md-6">
				<div data-aos="fade-left" class="google-map-error">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23833.342562569213!2d114.16067339999999!3d22.317164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040f0fd9c3a4bb%3A0x8834f38ba0db80ed!2sHollywood%20Mongkok%2C%20Kowloon%2C%20Hong%20Kong!5e0!3m2!1sfr!2sfr!4v1674292797912!5m2!1sfr!2sfr"
						width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade">
					</iframe>
				</div>
				<div class="mt-4 contact-details">
					<p data-aos="fade-left"><i class="bi bi-geo-alt"></i> {{ GoogleTranslate::trans('Address', \App::getLocale()) }}:  HOLLYWOOD MONGKOK , KOWLOON , HONG KONG</p>
					<p data-aos="fade-left"><i class="bi bi-telephone"></i> {{ GoogleTranslate::trans('Téléphone', \App::getLocale()) }}: +86 19 826 086 894</p>
							<p data-aos="fade-left"><i class="bi bi-envelope"></i> Email: <a href="mailto:contact@evo-machinery.com" style="text-decoration:none; color: black;">contact@evo-machinery.com</a></p>
		<p data-aos="fade-left"><i class="bi bi-envelope"></i> Email: <a href="mailto:sales@evo-machinery.com" style="text-decoration:none; color:black;">sales@evo-machinery.com</a></p>



					<p data-aos="fade-left"><i class="bi bi-globe"></i> Site web: evo-machinery.com</p>
				</div>
			</div>
		</div>
	</div>



	@endsection