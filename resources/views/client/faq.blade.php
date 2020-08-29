@php
$faqs =array(
["qst" => "Quelles sont les modalités de paiement?", "rep" => "Le client a deux choix de financement : soit l’autofinancement soit passer par un crédit bancaire. Le client doit avoir un apport personnel agrémenté au <strong>crédit bancaire</strong>. Il faut que le client soit éligible à un crédit bancaire suivant les conditions du crédit."],
["qst" => "Comment puis-je financer l’acquisition d’un bien immobilier ?", "rep" => "Pour procéder à l'achat d'un appartement, le client a le choix de financer l'acquisition d'un bien immobilier par tranches, selon l’état d’avancement du projet et ses capacités financières. Toutefois, nous proposons à nos clients un accompagnement bancaire. Le client doit avoir un apport personnel agrémenté au crédit bancaire. Pour plus d'informations <a href='/contact'>Contacter nous</a>"],
["qst" => "De quel type de crédit peut-on bénéficier ?", "rep" => "Il existe deux types de crédits, selon les revenus du futur acquéreur : le crédit à taux bonifiés 1 et 3 % et le taux paramétré normal, selon leurs salaires."],
["qst" => "Qu’est-ce que le taux d’intérêt bonifié à 1% et 3% ?", "rep" => "Les taux bonifiés à 1 et 3 % sont soumis à des conditions d’éligibilité."],
["qst" => "Vous êtes conventionnés avec quels organismes bancaires ?", "rep" => "Aujourd'hui, la CNEP  reste la meilleure banque sur le financement d’un <strong>crédit bancaire</strong>. Toutefois, nous laissons le choix à l’acquéreur de choisir, bien évidemment, sa banque."],
["qst" => "Quels frais prévoir pour l’acquisition d’une propriété ?", "rep" => "Plusieurs frais liés à l’achat d’une propriété sont à prévoir. Tout dépendra du mode de financement (autofinancement ou crédit bancaire) :  
<ul>
	<li><strong>Autofinancement :</strong>
		 il s’agit d’un calcul prévisionnel de ce que le client doit verser le jour de la signature de son acte. Il y aura les frais de publications qui sont à 1% plus les frais du notaire et la <strong>TVA</strong>  en vigueur, sans oublier l’assurance.
	</li>
	<li><strong>Crédit bancaire</strong>
		 il s’agit là des frais d’hypothèque, d’assurance et d’autres frais inhérents au service bancaire.
	</li>
</ul>"],
["qst" => "Assurez-vous la gestion de la copropriété ?", "rep" => "Oui, nous assurons la gestion de nos copropriétés <strong>2 ans aprés la vente</strong>"],
["qst" => "Les cuisines et salles de bain sont-elles entièrement équipées ?", "rep" => "Oui, les cuisines et salles de bain sont bel et bien équipées."],
["qst" => "Quel type d’équipements sont prévus dans vos projets ?", "rep" => "En règle générale, nos <strong>locaux et bureaux à usage commercial</strong> sont indépendants de l’entrée de notre résidence et ont un accès soit sur boulevard, soit indépendant afin de ne pas nuire à la tranquillité et sécurité de nos résidents."],
["qst" => "Comment l’accès aux halls d’entrées et parkings se fait-il ?", "rep" => "Par contrôle d’accès, tag, digicode et agent de sécurité à l’entrée de la résidence. Les halls d’entrée protégés par un sas de sécurité accessible avec un visiophone."],
["qst" => "Y-a-t-il des ascenseurs dans toutes vos résidences ?", "rep" => "Oui, chaque bloc dispose d’un ascenseur et les tours de deux ascenseurs et d’un monte-charge. Aussi, nous assurons la maintenance de tous nos ascenseurs et toute intervention en cas de problème et ce, 24h/7jr."],
["qst" => "Comment puis-je suivre l'avancement des travaux ?", "rep" => "Chaque trimestre, nous envoyons à nos acquéreurs et réservataires un état d’<strong>avancement des travaux</strong> de leur future résidence par mail, suivi de photographies qui témoignent de l’état actuel. Nous publions également ces photos sur notre <strong>site web</strong>, afin de permettre aux clients de suivre de plus près l’évolution des travaux."],
);
@endphp
@extends('layout.principal')
@section('title', 'FAQ')

@section('css')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('css/faq.css') }}">
@stop

@section('menu')
	@include('partials.menu', ['Background' => "#fff", "fixed" => true])
@stop

@section('content')
<div class="faqContainer">
	<div class="FaqText">
		<h1>Foire aux questions</h1>
		<p>Modalités de paiement ? Taux d’intérêts ? Commodités ? Les questions les plus fréquemment posées par les clients Bessa Promotion Immobilière sont recensées dans cette foire aux questions pour vous permettre de trouver des réponses sur des sujets très souvent abordés.</p>
	</div>
	<p class="qst">Découvrez dans cette FAQ les réponses à toutes les questions que vous vous posez :</p>
	
	<div class="faqs">
		<!--Accordion wrapper-->
		@foreach ($faqs as $faq)
			<div class="faq" id="{{$loop->index}}">
				<div class="faq-question">
					{{$faq['qst']}}
				</div>
				<div class="faq-answer">
					{!!$faq['rep']!!}
				</div>
			</div>
		@endforeach
	</div>	
</div>

@stop


@section('js')
@parent
<script type="text/javascript">
	
	document.querySelectorAll('div.faq').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
			var element = document.getElementById(this.id);
			if (!element.matches('.open')) {
				element.classList.add('open');
			}else{
				element.classList.remove('open');
			}
        });
    });

</script>
@stop
