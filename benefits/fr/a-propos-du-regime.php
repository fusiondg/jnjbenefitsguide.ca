<?php include("header.php"); ?>
<div id="wrapper">

    <div id="about-the-plan-page" class="container-fluid">
        <div class="row hero">
            <div class="col-xs-12">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-12 col-lg-offset-1 content-area">
                <div class="col-md-12 intro">
                    <h1 class="page-title jnj-blue-text">&Agrave; propos <span class="jnj-magenta-text">du r&eacute;gime</span></h1>
                    <p class="deck">Chez Johnson &amp; Johnson, nous croyons que chaque employ&eacute; a des besoins uniques, alors nous soutenons activement le mieux-être global de nos employés. C’est pourquoi nous offrons un r&eacute;gime d’assurance collective flexible qui vous permet de choisir la protection qui vous convient. Gr&acirc;ce au r&eacute;gime d’assurance collective, vous &ecirc;tes s&ucirc;r d’&ecirc;tre couvert pour les moments les plus importants.</p>

                    <h3>Voici comment &ccedil;a fonctionne</h3>
                    <p>Ce que comportent vos protections :</p>

                    <!--Automatic basic coverage-->
                    <div class="panel-group about-the-plan" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <table class="number-table">
                                            <tbody>
                                                <tr>
                                                    <td class="icon" valign="top"><img src="../images/icons/icon_48x48_auto_basic_coverage_white.png" class="icon-48" /></td>
                                                    <td class="white-text">Protections de base automatiques
                                                        <p>Un niveau de protection de base pour <b>tous</b> les employ&eacute;s.</p>
                                                        <p><span class="fas fa-star-exclamation"></span> Enti&egrave;rement pay&eacute;e par Johnson &amp; Johnson&nbsp;!</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <img src="../images/icons/icon_32x32_basic_life_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Assurance vie de base de l’employ&eacute;</h4>
                                        <ul>
                                            <li>1 fois votre
                                                <?php include("benefits-earnings-tooltip.php"); ?>, arrondi au millier de dollars pr&egrave;s</li>
                                            <li>Si votre <?php include("benefits-earnings-tooltip.php"); ?> excède 850 000 $ vous pouvez obtenir une protection de 1,5 million $ en fournissant une preuve d’assurabilité.</li>

                                        </ul>
                                    </div>
                                    <img src="../images/icons/icon_32x32_basic_ADD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Assurance d&eacute;c&egrave;s et mutilation accidentels (DMA) de base de l’employ&eacute;</h4>
                                        <ul>
                                            <li>3 fois votre <?php include("benefits-earnings-tooltip.php"); ?>, arrondi au millier de dollars pr&egrave;s</li>
                                        </ul>
                                    </div>
                                    <img src="../images/icons/icon_32x32_short_term_disability.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Assurance invalidit&eacute; de courte dur&eacute;e</h4>
                                        <ul>
                                            <li>Un pourcentage de votre salaire de base, en fonction de vos ann&eacute;es de service, pendant un maximum de 26 semaines, payable lorsque le cong&eacute; est approuv&eacute;</li>
                                        </ul>
                                    </div>
                                    <img src="../images/icons/icon_32x32_basic_long_term_disability.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Assurance invalidit&eacute; de longue dur&eacute;e de base</h4>
                                        <ul>
                                            <li>50 % de votre <?php include("benefits-earnings-tooltip.php"); ?> pr&eacute;invalidit&eacute;
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center m-1"><img src="../images/icons/icon_64x64_plus_in_circle.png" class="icon-64" alt="+" /></div>

                    <!--Flexible coverage options-->
                    <div class="panel-group about-the-plan" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <table class="number-table">
                                            <tbody>
                                                <tr>
                                                    <td class="icon" valign="top"><img src="../images/icons/icon_48x48_flexible_coverage_white.png" class="icon-48" /></td>
                                                    <td class="white-text">Options de protection flexibles
                                                        <p>Le choix&nbsp;: pour vous assurer d’&ecirc;tre bien prot&eacute;g&eacute;.</p>
                                                        <p><span class="fas fa-star-exclamation"></span> Johnson &amp; Johnson vous donne des cr&eacute;dits flexibles pour vous aider &agrave; payer ces options&nbsp;! </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <h4 class="mb-1">Enti&egrave;rement ou partiellement pay&eacute;e avec des cr&eacute;dits flexibles fournis par Johnson &amp; Johnson</h4>
                                    <img src="../images/icons/icon_32x32_flexible_extended_medical_care.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Soins m&eacute;dicaux compl&eacute;mentaires</p>
                                    </div>
                                    <img src="../images/icons/icon_32x32_flexible_dental_care.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Soins dentaires</p>
                                    </div>
                                    <img src="../images/icons/icon_32x32_flexible_HCSA.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Compte-sant&eacute;</p>
                                    </div>

                                    <h4 class="mb-1">Pay&eacute;e par retenues salariales</h4>

                                    <img src="../images/icons/icon_32x32_flexible_optional_life_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Assurance vie facultative </p>
                                    </div>
                                    <img src="../images/icons/icon_32x32_flexible_optional_ADD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Assurance d&eacute;c&egrave;s et mutilation accidentels (DMA) facultative</p>
                                    </div>
                                    <img src="../images/icons/icon_32x32_flexible_optional_LTD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line mb-2">
                                        <p>Assurance invalidit&eacute; de longue dur&eacute;e (ILD) facultative</p>
                                    </div>

                                    <p>Plus sur les options de protection flexibles &agrave; la <a href="options-de-protection-flexibles">page suivante</a>&nbsp;!</p>


                                </div>
                            </div>
                        </div>



                    </div>

                    <p class="deck">
                        Vous pouvez modifier vos choix de protections chaque ann&eacute;e pendant la r&eacute;adh&eacute;sion aux avantages sociaux dans la derni&egrave;re semaine de mai et la premi&egrave;re semaine de juin.</p>
                    <p>Les protections que vous choisissez sont en vigueur pendant toute l’ann&eacute;e du r&eacute;gime, soit du 1<sup>er</sup> juillet au 30 juin, &agrave; moins que vous viviez un &eacute;v&eacute;nement admissible comme un mariage, un divorce ou une naissance.</p>


                    <a class="next-page" href="options-de-protection-flexibles">Options de protection flexibles</a>

                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>