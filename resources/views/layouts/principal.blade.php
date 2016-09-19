<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>LGVH - Home</title>
        <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./css/elementos.css">
        <link rel="stylesheet" type="text/css" href="./css/estilo_menu.css">
    </head>
    <body>
        <div id="cuerpo_arriba"> 
            <a href="http://www.genomica.uaslp.mx/index.html#"><img src="./images/Header.jpg" style="width: 1023px;"></a>
            <ul id="nivelm-1">
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Main</a></li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">About us</a> 
                    <ul class="nivelm-version2">
                        <li><a href="http://www.genomica.uaslp.mx/Acerca/mvi.html">Our mission</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Acerca/inv.html">Researchers</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Acerca/pea.html">Administrative personnel</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Acerca/esd.html">Students</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Acerca/lab.html">Laboratory</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Academy</a> 
                    <ul class="nivelm-2">
                        <li><a href="http://www.genomica.uaslp.mx/Academia/MedSchool/MolBio.html">Pre-grad molecular biology course</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Academia/Biomol_basico/cbioinf.html">Post-grad molecular biology course</a></li>
                    <li><a href="http://www.genomica.uaslp.mx/Academia/Bioseguridad/cbioseg.html">Biosafety course</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Academia/Tesis/tesis.html">Local thesis repository</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Academia/Tecnicas_Experimentales/ctecexp.html">Experimental techniques course</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Research</a> 
                    <ul class="nivelm-version2">
                        <li><a href="http://www.genomica.uaslp.mx/Research/KIR.html">KIR</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Research/HIV.html">HIV</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Research/PdmFlu.html">Pandemic influenza</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Research/Biobank.html">Biorepository</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Research/Bioinformatics/Bioinformatics.html">Bioinformatics</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Protocols</a> 
                    <ul class="nivelm-version2">
                        <li><a href="http://www.genomica.uaslp.mx/Protocolos/Bioseguridad/indexbioseg.html">Biosafety manual (Spa)</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Protocolos/Protocols.html">Protocols</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Tools</a> 
                    <ul class="nivelm-2">
                        <li><a href="http://uaslp.cactus-project.org/">KIR Haplotype Tool (KIRHAT)</a></li>
                        <li><a href="http://uaslp.cactus-project.org/HARO/oligos.php">Oligo reconstitution (HARO) </a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/SeqPublish/seqpublish.html">Unanimity reformating</a></li>
                        <li><a href="https://www.idtdna.com/calc/analyzer">Oligo design by IDT</a></li>
                        <li><a href="http://arep.med.harvard.edu/labgc/adnan/projects/Utilities/revcomp.html">Reverse complement</a></li>
                        <li><a href="http://www.ebi.ac.uk/Tools/msa/muscle/">MUSCLE alignment</a></li>
                        <li><a href="http://www.ebi.ac.uk/Tools/msa/clustalo/">Clustal Omega</a></li>
                        <li><a href="http://www.ebi.ac.uk/Tools/sfc/emboss_seqret/">Sequence conversion</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/findmodel/findmodel.html">LANL Find Model</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/BASIC_BLAST/basic_blast.html">LANL HIV BLAST</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/GLYCOSITE/glycosite.html">LANL HIV N-GlycoSite</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/QC/index.html">LANL HIV Seq QC</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/RIP/RIP.html">LANL HIV Recomb</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/SNAP/SNAP.html">LANL HIV dS/dN</a></li>
                        <li><a href="http://www.hiv.lanl.gov/content/sequence/CONSENSUS/consensus.html">LANL Consensus</a></li>
                        <li><a href="http://hivdb.stanford.edu/">Stanford HIV Drug DB</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Databases</a> 
                    <ul class="nivelm-2">
                        <li><a href="http://www.genomica.uaslp.mx/Databases/Reference.html">References &amp; Guidelines</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Databases/Images.html">Image Database</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Administrative</a> 
                    <ul class="nivelm-version2">
                        <li><a href="http://www.genomica.uaslp.mx/Admin/H&amp;S.html">Health &amp; Safety</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Admin/LabTools.html">Lab Tools &amp; Forms</a></li>
                        <li><a href="http://www.genomica.uaslp.mx/Admin/BioDoc-It.html">BioDoc-It</a></li>
                    </ul>
                </li>
                <li><a href="http://www.genomica.uaslp.mx/index.html#">Links</a> 
                    <ul class="nivelm-version2">
                        <li><a href="http://www.uaslp.mx/">UASLP</a></li>
                        <li><a href="http://www.protocol-online.org/">Protocol Online</a></li>
                        <li><a href="http://www.ipicyt.edu.mx/">IPICYT</a></li>
                        <li><a href="http://www.allelefrequencies.net/default.asp">Allele*Frequencies</a></li>
                        <li><a href="http://www.ebi.ac.uk/ipd/kir/index.html">IPD-KIR Database</a></li>
                        <li><a href="http://www.ebi.ac.uk/ipd/mhc/index.html">IPD-MHC Database</a></li>
                        <li><a href="http://www.ncbi.nlm.nih.gov/">NCBI</a></li>
                        <li><a href="http://www.ebi.ac.uk/">EBI</a></li>
                        <li><a href="http://www.expasy.org/">ExPASy</a></li>
                        <li><a href="http://www.genenames.org/">HUGO Nomenclature</a></li>
                        <li><a href="healthmap.dev:81">Healthmap</a></li> 
                    </ul>
                </li>
            </ul>
        </div>

        <div id="cuerpo_abajo"> 
         <!--<center>
                    <img src="./images/MAIN.JPG" align="middle">-->
            @yield('content')
        </div>

        <div id="contacto"> 
            <p><b>&nbsp;&nbsp;Facultad de Medicina de la Universidad Autónoma de San Luis 
                Potosí. <br>
                &nbsp;&nbsp;Avenida Venustiano Carranza #2405 Colonia Filtros Las Lomas, CP 
                78210 San Luis Potosí, México. <br>
                &nbsp;&nbsp;Tel: +52 (444) 826-2300 ext 6685, 6684 <br>
                &nbsp;&nbsp;E-mail: lgvh.uaslp@gmail.com<br>
                <br><br></b>
                &nbsp;&nbsp;Site version 3, last updated Mar, 2016
                &nbsp;&nbsp;<font color="red">NEW! - Detailed instructions on how to access our BioDoc-It gel 
                documentation server are now given in a new link located in the Administrative tab!</font>
            </p>
        </div>
        <div id="h-modal" class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title" id="modalTitle">Modal Title</h3>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="./js/jquery-3.1.0.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
    @yield('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</html>