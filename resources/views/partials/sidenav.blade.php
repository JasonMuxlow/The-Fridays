<!--	// side bar starts//-->
<div id="sidebar-wrapper">
    <!--		TODO: i need to look back into this i dont think its the best way but it works for now-->
    <!--// used an accordion into my side nav because thats the first thing i thought when i had to do a drop down //-->
    <div class="accordion" id="accordionExample">

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>Clothing</b>
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>Jerseys</li>
                        <li>T-Shirts</li>
                        <li>Long Sleeves</li>
                        <li>Joggers</li>
                        <li>Jumpers</li>
                        <li>Crew necks</li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <b>Accessories</b>
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>Masks</li>
                        <li>Bags</li>
                        <li>Socks</li>
                        <li>Keychains</li>
                        <li>Phone Case</li>
                        <li>Flags</li>
                        <li>Bottles</li>
                        <li>Mugs</li>
                        <li>Mouse Mat</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <b>Hardware</b>
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                 data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul>
                        <li>SecretLabs</li>
                        <li>Scuf</li>
                        <li>Logitech</li>
                        <li>Intel</li>
                        <li>NZXT</li>
                    </ul>
                </div>
            </div>

        </div>


        <!--// accordion ends //-->

        <!--			TODO: need to add a high to low price range button and alphabet order button-->

    </div>
</div>
<!--//sidebar ends//-->