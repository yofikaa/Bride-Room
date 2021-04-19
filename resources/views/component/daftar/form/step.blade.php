<style>
    .sipora-step {
        border: 1px solid #1377be;
        border-radius: 15px;
        color: #1377be;
        height: 150px;
    }
    .sipora-step.active {
        background: #eee;
    }

    .sipora-step.done {
        color: white;
        background: #22E21B;
        border: 1px solid #22E21B;
    }
    .sipora-step.index {
        border: 1px solid #1377be;
        border-radius: 15px;
        color: white;
        background: #1377be
    }

    fieldset {
        border: 2px solid #1377be !important;
        border-radius: 15px;
        padding: 0 1.4em 1.4em 1.4em !important;
        margin: 0 0 1.5em 0 !important;
    }
    legend {
        width: inherit;
        padding: 0 10px;
        border-bottom: none;
    }

    .sipora-badge {
        border-radius: 15px;
        color: white;
        width: auto;
        font-weight: 100 !important;
        font-family: 'Raleway-Regular';
    }
    .sipora-badge.red {
        background: #FB2626;
    }
    .sipora-badge.green {
        background: #22E21B;
    }
    .step-round{
        padding: 7px;padding-top: 10px;padding-bottom: 10px ;background-color: white
    }
    .step-round-blank{
        padding: 7px;padding-top: 10px;padding-bottom: 10px ;background-color: white
    }
    .border-step{
        border: 2px #1377be solid !important;
    }

    @media (max-width: 992px) {
        .text-step{
            font-size: 10px;
        }
    }


</style>
<div class="row">
   <div class="col-md-2 col-sm-4">
       <div>
           <fieldset class="bg-biru pt-4 text-center">
               <span class="border border-white rounded-circle biru font-weight-bold step-round">N-1</span>
               <br><br>
               <span class="font-weight-bold text-white SourceSansPro text-step">DATA DIRI</span>
           </fieldset>
       </div>
   </div>
    <div class="col-md-2 col-sm-4">
        <div>
            <fieldset class=" pt-4 text-center">
                <span class="border border-primary rounded-circle biru font-weight-bold step-round-blank border-step">N-2</span>
                <br><br>
                <span class="text-justify text-center font-weight-bold biru SourceSansPro text-step">ASAL - USUL</span>
            </fieldset>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div>
            <fieldset class=" pt-4 text-center">
                <span class="border border-primary rounded-circle biru font-weight-bold step-round-blank border-step">N-3</span>
                <br><br>
                <span class="font-weight-bold biru SourceSansPro text-step">PERSETUJUAN</span>
            </fieldset>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div>
            <fieldset class=" pt-4 text-center">
                <span class="border border-primary rounded-circle biru font-weight-bold step-round-blank border-step">N-4</span>
                <br><br>
                <span class="font-weight-bold biru SourceSansPro text-step">KETERANGAN</span>
            </fieldset>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div>
            <fieldset class=" pt-4 text-center">
                <span class="border border-primary rounded-circle biru font-weight-bold step-round-blank border-step">N-5</span>
                <br><br>
                <span class="font-weight-bold biru SourceSansPro text-step">SURAT IJIN</span>
            </fieldset>
        </div>
    </div>
    <div class="col-md-2 col-sm-4">
        <div>
            <fieldset class=" pt-4 text-center">
                <span class="border border-primary rounded-circle biru font-weight-bold step-round-blank border-step">N-6</span>
                <br><br>
                <span class="font-weight-bold biru SourceSansPro text-step">KEMATIAN</span>
            </fieldset>
        </div>
    </div>
</div>
