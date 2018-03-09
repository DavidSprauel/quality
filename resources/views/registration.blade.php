@extends('main.layout')

@section('tab_title')
    {{ __('menu.registration') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur registration"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.registration') }}
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-two-thirds">
                    <div class="box">
                        <article class="media">
                            <div class="media-content ">
                                <div class="content text-justify">
                                    @if(session('lang') == 'en')
                                        <h3>Important dates</h3>
                                        <ul>
                                            <li>Registration opens: November 10, 2017</li>
                                            <li>Early registration deadline:  March 30, 2018</li>
                                            <li>Cancellation deadline :  April 30, 2018</li>
                                        </ul>

                                        <h3>Registration Policy</h3>

                                        <h5><strong>Fees</strong></h5>
                                        <p>
                                            Conference registration fee entitles , as participating in all sessions during 2 days, including keynotes. Participation fees can not lead to any splitting by day or half-day.<br>
                                            Coffees and 2 Lunchs are inclused. Gala dinner is not inclused in standard fees. Gala dinner fee is 150.00€.
                                        </p>

                                        <h5><strong>Payment</strong></h5>
                                        <p>
                                            Visa, Mastercard and Eurocard are accepted. Detailed information will be provided in the online registration form.<br>
                                            You will receive an Invoice after you complete the registration Form.<br>
                                            To pay by bank transfert, please click on « Reservation », after sending your registration you willr eceive a confirmation and an invoice by email.<br>
                                        </p>

                                        <h5><strong>Cancellation Policy </strong></h5>
                                        <p>
                                            Requests for cancellation be received at AFQP before April 30, 2018. After April 30, 2018, no cancellation accepted.<br>
                                            Free of charge until: March 30, 2018, 50% of the fee until 1st May, no refund after May 1, 2018
                                            Requests for refund must be received at AFQP before May 30, 2018.<br>
                                            A €100.00 processing fee will be withheld from all refunds. 
                                        </p>
                                    @else

                                        <h3>Dates Importantes</h3>
                                        <ul>
                                            <li>Ouverture des inscriptions 10/11/2017</li>
                                            <li>Tarif privilège jusqu’au 30/03/2017</li>
                                            <li>Annulation jusqu’au 30/04/2018</li>
                                        </ul>

                                        <h3>Modalités d’inscription</h3>

                                        <h5><strong>Tarifs</strong></h5>
                                        <p>
                                            Les droits d'inscription à la conférence donnent droit à participer à toutes les sessions, y compris les discours d'ouverture. Les tarifs indiqués ci-dessus ne peuvent donner lieu à aucun fractionnement par journée ou demi-journée.<br>
                                            Le tarif donne accès à l'ensemble des conférences et sessions des deux journées, accès aux pauses, aux 2 cocktails déjeunatoires.<br>
                                            La soirée de gala n’est pas incluse dans les droits d'inscription. Pour participer à la soirée de gala, l'inscription est de 150€ HT.
                                        </p>

                                        <h5><strong>Règlement</strong></h5>
                                        <p> Le règlement des droits d'inscription se fait : </p>
                                        <ul>
                                            <li> Par Carte Bancaire, paiement en ligne sécurisé. </li>
                                            <li>Sur facture. Paiement par virement.</li>
                                        </ul>

                                        <h5><strong>Conditions d'annulation</strong></h5>
                                        <p>
                                            Toute demande d'annulation doit être adressée à l’AFQP au plus tard le 30 avril 2018 inclus.<br>
                                            Aucun frais jusqu’au 30 Mars 2018, 50% de retenue jusqu’au 1er May inclus. Dans ce délai, il sera procédé à un remboursement de 50% des droits versés. À partir du 15 Mai 2018, aucun remboursement ne sera possible. <br>
                                            Les changements de nom seront autorisés jusqu'au 30 mai 2018 sous les conditions suivantes, une retenue de 100€ sera appliquée pour frais de traitement administratif 
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="column">
                    <a  class="button is-info is-block is-large"
                        href="https://www.weezevent.com/congressafqpeoq2018?lg_billetterie=1&id_evenement=296489"
                        target="_blank"
                    >
                        {{__('home.register')}}
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection