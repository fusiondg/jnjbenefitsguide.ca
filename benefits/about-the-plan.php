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
                    <h1 class="page-title jnj-blue-text">About <span class="jnj-magenta-text">the plan</span></h1>
                    <p class="deck">At Johnson &amp; Johnson, we believe that each employee has unique needs and we actively support our employees’ total well-being. That’s why we offer a flexible benefits plan – allowing you to choose the right coverage for you. With the benefits plan, you can be sure you’re covered for the moments that matter most.</p>

                    <h3>Here’s how it works</h3>
                    <p>Your benefits are made up of:</p>

                    <!--Automatic basic coverage-->
                    <div class="panel-group about-the-plan" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <table class="number-table">
                                            <tbody>
                                                <tr>
                                                    <td class="icon" valign="top"><img src="images/icons/icon_48x48_auto_basic_coverage_white.png" class="icon-48" /></td>
                                                    <td class="white-text">Automatic basic coverage
                                                        <p>A base level of protection for all employees.</p>
                                                        <p><span class="fas fa-star-exclamation"></span> Fully paid by Johnson &amp; Johnson!</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <img src="images/icons/icon_32x32_basic_life_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Basic employee Life insurance</h4>
                                        <ul>
                                            <li>1 times your
                                                <?php include("benefits-earnings-tooltip.php"); ?>, rounded to the nearest $1,000</li>

                                            <li>If your
                                                <?php include("benefits-earnings-tooltip.php"); ?> exceed $850,000, then you can receive up to $1.5 million of Basic Life insurance with evidence of insurability</li>

                                        </ul>
                                    </div>
                                    <img src="images/icons/icon_32x32_basic_ADD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Basic employee Accidental Death &amp; Dismemberment (AD&amp;D) insurance</h4>
                                        <ul>
                                            <li>3 times your
                                                <?php include("benefits-earnings-tooltip.php"); ?>, rounded to the nearest $1,000</li>
                                        </ul>
                                    </div>
                                    <img src="images/icons/icon_32x32_short_term_disability.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Short-Term Disability insurance</h4>
                                        <ul>
                                            <li>A percentage of your base salary, based on your length of service, for up to 26 weeks, payable upon approved leave</li>
                                        </ul>
                                    </div>
                                    <img src="images/icons/icon_32x32_basic_long_term_disability.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details">
                                        <h4>Basic Long-Term Disability insurance</h4>
                                        <ul>
                                            <li>50% of pre-disability monthly
                                                <?php include("benefits-earnings-tooltip.php"); ?>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center m-1"><img src="images/icons/icon_64x64_plus_in_circle.png" class="icon-64" alt="+" /></div>

                    <!--Flexible coverage options-->
                    <div class="panel-group about-the-plan" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h3 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <table class="number-table">
                                            <tbody>
                                                <tr>
                                                    <td class="icon" valign="top"><img src="images/icons/icon_48x48_flexible_coverage_white.png" class="icon-48" /></td>
                                                    <td class="white-text">Flexible coverage options
                                                        <p>Choice, so you can be sure you’re protected.</p>
                                                        <p><span class="fas fa-star-exclamation"></span> Johnson &amp; Johnson gives you flex credits to help pay for these options!</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </h3>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <h4 class="mb-1">Fully or partially covered through Johnson &amp; Johnson provided flex credits</h4>
                                    <img src="images/icons/icon_32x32_flexible_extended_medical_care.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Extended medical care</p>
                                    </div>
                                    <img src="images/icons/icon_32x32_flexible_dental_care.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Dental care</p>
                                    </div>
                                    <img src="images/icons/icon_32x32_flexible_HCSA.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Health care spending account (HCSA)</p>
                                    </div>

                                    <h4 class="mb-1">Covered through payroll deductions</h4>

                                    <img src="images/icons/icon_32x32_flexible_optional_life_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Optional Life insurance </p>
                                    </div>
                                    <img src="images/icons/icon_32x32_flexible_optional_ADD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line">
                                        <p>Optional Accidental Death &amp; Dismemberment (AD&amp;D) insurance </p>
                                    </div>
                                    <img src="images/icons/icon_32x32_flexible_optional_LTD_insurance.png" class="icon-32 small-icon clearfix" />
                                    <div class="icon-details single-line mb-2">
                                        <p>Optional Long-Term Disability (LTD) insurance</p>
                                    </div>
                                    <p>More information about flexible benefits options is on the <a href="flexible-benefit-options">next page</a>.</p>


                                </div>
                            </div>
                        </div>



                    </div>

                    <p class="deck">
                        You have an opportunity to make changes to your benefits selections each year at benefits re-enrolment during the last week of May and first week of June. </p>
                    <p>Your benefits selections are effective for the entire benefits year – July 1 to June 30 – unless you have an eligible life event like, getting married or divorced or having a baby.</p>


                    <a class="next-page" href="flexible-benefit-options">Flexible benefit options</a>

                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php"); ?>