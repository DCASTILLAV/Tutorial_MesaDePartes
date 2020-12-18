<?php
    require_once("../../config/conexion.php");
    require_once("../../models/Menu.php");
    $menu = new Menu();

    $idx = $_GET["id"];
    $datos = $menu->get_menu_x_id($idx);

    $cadena_xml = "
    <?xml version='1.0' encoding='ISO-8859-1'?>
        <?mso-application progid='Excel.Sheet'?>

        <Workbook xmlns='urn:schemas-microsoft-com:office:spreadsheet' 
            xmlns:o='urn:schemas-microsoft-com:office:office' 
            xmlns:x='urn:schemas-microsoft-com:office:excel' 
            xmlns:ss='urn:schemas-microsoft-com:office:spreadsheet' 
            xmlns:html='http://www.w3.org/TR/REC-html40'>

            <DocumentProperties xmlns='urn:schemas-microsoft-com:office:office'>
                <Author>AOP-SIS10</Author>
                <LastAuthor>AOP-SIS10</LastAuthor>
                <Created>2020-11-17T13:29:10Z</Created>
                <LastSaved>AOP-SIS10</LastSaved>
                <Company>APROEM-SISTEMAS</Company>
                <Version>12.00</Version>
            </DocumentProperties>

            <OfficeDocumentSettings xmlns='urn:schemas-microsoft-com:office:office'>
                <AllowPNG/>
            </OfficeDocumentSettings>

            <ExcelWorkbook xmlns='urn:schemas-microsoft-com:office:excel'>
                <WindowHeight>7755</WindowHeight>
                <WindowWidth>20490</WindowWidth>
                <WindowTopX>0</WindowTopX>
                <WindowTopY>0</WindowTopY>
                <ProtectStructure>False</ProtectStructure>
                <ProtectWindows>False</ProtectWindows>
            </ExcelWorkbook>

            <Styles>
                <Style ss:ID='_sty_rpt01'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='14' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_hea01'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='22' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#1F4E78' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_sub01'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center' ss:WrapText='1'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#1F4E78' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texWBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_texWBC001'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_texWBL001'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_texGBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#A9D08E' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texGBC001'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#A9D08E' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texGBL001'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#A9D08E' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texYBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#FFD966' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texYBC001'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#FFD966' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texYBL001'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#FFD966' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texRBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#A62A2A' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texRBC001'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#A62A2A' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_texRBL001'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#A62A2A' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_heaWBL002'>
                    <Alignment ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='12' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#1F4E78' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_heaWBL003'>
                    <Alignment ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='14' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#1F4E78' ss:Pattern='Solid'/>
                </Style>

                <Style ss:ID='_sty_numWBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior/>
                    <NumberFormat ss:Format='#,##0.00;-#,##0.00; ' />
                </Style>

                <Style ss:ID='_sty_numGBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#A9D08E' ss:Pattern='Solid'/>
                    <NumberFormat ss:Format='#,##0.00;-#,##0.00; ' />
                </Style>

                <Style ss:ID='_sty_numYBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                    <Interior ss:Color='#FFD966' ss:Pattern='Solid'/>
                    <NumberFormat ss:Format='#,##0.00;-#,##0.00; ' />
                </Style>

                <Style ss:ID='_sty_numRBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#FFFFFF'/>
                    <Interior ss:Color='#A62A2A' ss:Pattern='Solid'/>
                    <NumberFormat ss:Format='#,##0.00;-#,##0.00; ' />
                </Style>

                <Style ss:ID='_sty_squWBR001'>
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Borders>
                        <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
                    </Borders>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_squWBC001'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Borders>
                        <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
                    </Borders>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_squWBL001'>
                    <Alignment ss:Horizontal='Left' ss:Vertical='Center'/>
                    <Borders>
                        <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
                    </Borders>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_fmt_num001' ss:Name='Millares'> 
                    <NumberFormat ss:Format='_ * #,##0.00_ ;_ * \-#,##0.00_ ;_ * &quot;-&quot;??_ ;_ @_ '/>
                </Style>

                <Style ss:ID='_sty_nquWBR001' ss:Parent='_fmt_num001'> 
                    <Alignment ss:Horizontal='Right' ss:Vertical='Center'/>
                    <Borders>
                        <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
                        <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
                    </Borders>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='9' ss:Color='#000000'/>
                </Style>

                <Style ss:ID='_sty_texWBC002'>
                    <Alignment ss:Horizontal='Center' ss:Vertical='Center'/>
                    <Font ss:FontName='Segoe UI' x:Family='Swiss' ss:Size='14' ss:Color='#000000'/>
                </Style>

            </Styles>

            <Worksheet ss:Name='Hoja 1'>
                <Names>
                    <NamedRange ss:Name='Print_Titles' ss:RefersTo='=Hoja 1!R1:R5'/>
                </Names>

                <Table x:FullColumns='1' x:FullRows='1' ss:DefaultRowHeight='15'>
                    <Column ss:Index='01' ss:AutoFitWidth='0' ss:Width='70.00'/>
                    <Column ss:Index='02' ss:AutoFitWidth='0' ss:Width='200.00'/>
                    <Column ss:Index='03' ss:AutoFitWidth='0' ss:Width='70.00'/>
                    <Column ss:Index='04' ss:AutoFitWidth='0' ss:Width='70.00'/>
                    <Column ss:Index='05' ss:AutoFitWidth='0' ss:Width='35.00'/>
                    <Column ss:Index='06' ss:AutoFitWidth='0' ss:Width='150.00'/>
                    <Column ss:Index='07' ss:AutoFitWidth='0' ss:Width='50.00'/>
                    <Column ss:Index='08' ss:AutoFitWidth='0' ss:Width='50.00'/>
                    <Column ss:Index='09' ss:AutoFitWidth='0' ss:Width='200.00'/>
                    <Column ss:Index='10' ss:AutoFitWidth='0' ss:Width='70.00'/>
                    <Column ss:Index='11' ss:AutoFitWidth='0' ss:Width='50.00'/>
                    <Column ss:Index='12' ss:AutoFitWidth='0' ss:Width='90.00'/>
                    <Column ss:Index='13' ss:AutoFitWidth='0' ss:Width='200.00'/>
                    <Row ss:AutoFitHeight='0' ss:Height='20.00'>
                        <Cell ss:StyleID='_sty_rpt01'><Data ss:Type='String'>Reporte cargo de documentos</Data><NamedCell ss:Name='Print_Titles'/></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBL001'><Data ss:Type='String'>Nro de reporte: 3F        </Data><NamedCell ss:Name='Print_Titles'/></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBL001'><Data ss:Type='String'> </Data><NamedCell ss:Name='Print_Titles'/></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='20.00'>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>ORIGEN:</Data></Cell>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>LIMA</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='20.00'>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>DESTINO:</Data></Cell>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>CHICLAYO</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='2.25'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='28.00'>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>ITEM</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>CLIENTE</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>FECHA DE RECOJO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>FECHA DE ENTREGA</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>UND</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>PRODUCTO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>CANT</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>PESO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>DESTINATARIO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>GUIA INTERNA MECAV</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>DOC. CLIENTE</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>OBSERVACION</Data></Cell>
                    </Row>
                    ";
                    foreach ($datos as $row) {
                    $cadena_xml.="
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>" . $row['men_id'] . "</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>" . $row['men_nom'] . "</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>24.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>9.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>ESSALUD</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009083</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37467</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>COPIA</Data></Cell>
                    </Row>
                    ";
                    }
                    $cadena_xml.="
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='20.00'>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>ORIGEN:</Data></Cell>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>LIMA</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='20.00'>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>DESTINO:</Data></Cell>
                        <Cell ss:StyleID='_sty_heaWBL002'><Data ss:Type='String'>TRUJILLO</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='2.25'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='28.00'>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>ITEM</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>CLIENTE</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>FECHA DE RECOJO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>FECHA DE ENTREGA</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>UND</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>PRODUCTO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>CANT</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>PESO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>DESTINATARIO</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>GUIA INTERNA MECAV</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>DOC. CLIENTE</Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_sub01'><Data ss:Type='String'>OBSERVACION</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0004</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>02/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SANCHEZ FERRER SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37305</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0004</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12043</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0004</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>37636</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0005</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>02/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>8.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>88.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>DROFAR EIRL</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37302</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0005</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12045</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0005</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>6772</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0006</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>02/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>3.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>BOTICA BENDICION SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009019</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37316</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0006</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009019</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12051</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0007</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>02/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>18.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLNICA ANCHEZ FERRER SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37306</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0007</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12052</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0007</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>151278</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0008</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>02/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>6.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>24.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>BOTICA C Y L EIRL</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009021</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37320</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0008</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009021</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12053</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0009</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>03/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>7.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>33.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CONSORCIO FARMACEUTICO</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009031</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37386</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0009</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009031</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12127</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0010</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>20.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>74.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>DISTRIBUIDORA GALUMA SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009085</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37468</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0010</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009085</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12204</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0011</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>8.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>INSTITUTO REG. DE OFTALMOLOGIA JAVIER SERVOT</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009088</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37463</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0011</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009088</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12200</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0011</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009088</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>189</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0012</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GSP TRUJILLO SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009089</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37465</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0012</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009089</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12205</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0012</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009089</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4520268192</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0013</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>7.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GERENCIA REGIONAL DE SALUD LA LIBERTAD</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009091</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37460</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0013</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009091</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12202</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0013</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009091</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>688</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>10/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>11/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>2.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>5.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA LA MERCED SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009098</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37586</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009098</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12324</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0014</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009098</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4500077292</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>10/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>11/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>6.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SANCHEZ FERRER SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009099</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37591</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009099</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12339</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0015</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009099</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>377591</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0016</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>8.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>64.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>UE SALUD TRUJILLO SUR OESTE</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009101</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37431</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0016</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009101</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12172</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0017</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>07/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNIAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>9.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>109.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GSP RUJILLO SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009108</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37451</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0017</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009108</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12193</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0017</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009108</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4520268192</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0018</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>04/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>23.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>EDER MONZON</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009113</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12160</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0019</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>3.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>3.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SANCHEZ FERRER</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009123</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37494</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0019</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009123</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12232</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0019</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009123</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>37682</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>8.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>157.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>DROFAR EIRL</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009124</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37492</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009124</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12233</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0021</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>08/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDCINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>15.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>51.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>UE 403 SALUD TRUJILLO SUR OESTE</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009126</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37518</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0021</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009126</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12265</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0021</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009126</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>909</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0022</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>16/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>3.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA PERUANA AMERICANA SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009140</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37683</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0022</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009140</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12418</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0023</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>09/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GSP TRUJILLO</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009161</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37553</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0023</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009161</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12299</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0023</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009161</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4520268487</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0024</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>09/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>11.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>BOTICAS C Y L EIRL</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009162</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37547</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0024</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009162</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12293</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0025</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>09/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>15/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>3.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>52.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>HOSPITAL REGIONAL DOCENTE DE TRUJILLO</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009167</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-11169</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0026</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>16/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICNAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>15.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CONSORCIO FARMACEUTICO LA LUZ SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009211</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37708</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0026</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009211</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12441</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0027</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>16/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>6.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA LA MERCED SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009213</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37713</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0027</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009213</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12449</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0027</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009213</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4500076659</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0028</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>17/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINA</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>2.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>7.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GSP TRUJILLO SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009225</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12501</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0029</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>17/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>7.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SANCHEZ FERRER SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009227</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37731</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0029</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009227</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12470</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0029</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009227</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>151839</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0030</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>17/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>5.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA PERUANO AMERICANA SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009228</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37732</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0030</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009228</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12473</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0031</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>17/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>7.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SAN ANTONIO SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009229</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37747</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0032</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>17/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>1.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>CLINICA SANCHEZ FERRER SA</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009239</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37755</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0032</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009239</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12499</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0033</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>18/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>2.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>25.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GSP TRUJILLO SAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009243</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37773</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GA/SUNAT</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0033</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009243</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12504</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>SUNAT</Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0033</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009243</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>4520269652</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0034</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FRESENIUS KABI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>18/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>19/09/2020</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>MEDICINAS</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>4.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>64.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>HOSPITAL REGIONAL DOCENTE DE TRUJILLO</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009250</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>FAC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>002-37785</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0034</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009250</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>GUI</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>003-12525</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>0034</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_nquWBR001'><Data ss:Type='Number'>0.00</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>001-009250</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>OC</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'>689</Data></Cell>
                        <Cell ss:StyleID='_sty_squWBL001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                    <Row ss:AutoFitHeight='0' ss:Height='15.00'>
                        <Cell ss:StyleID='_sty_texWBR001'><Data ss:Type='String'></Data></Cell>
                    </Row>
                </Table>

                <WorksheetOptions xmlns='urn:schemas-microsoft-com:office:excel'>
                    <PageSetup>
                        <Layout x:Orientation='Landscape'/>
                        <Header x:Margin='0.50' x:Data='&amp;Z&amp;DPagina: &amp;P/&amp;#&#10;Fecha: &amp;F&#10;Hora: &amp;H'/>
                        <Footer x:Margin='0.50'/>
                        <PageMargins x:Bottom='0.98' x:Left='0.75' x:Right='0.75' x:Top='0.98'/>
                    </PageSetup>

                    <Unsynced/>
                    <FitToPage/>

                    <Print>
                        <FitHeight>0</FitHeight>
                        <ValidPrinterInfo/>
                        <PaperSizeIndex>9</PaperSizeIndex>
                        <Scale>73</Scale>
                        <HorizontalResolution>-3</HorizontalResolution>
                        <VerticalResolution>0</VerticalResolution>
                    </Print>

                    <Zoom>90</Zoom>

                    <ProtectObjects>False</ProtectObjects>
                    <ProtectScenarios>False</ProtectScenarios>
                </WorksheetOptions>

            </Worksheet>

        </Workbook>
    ";
    header('Content-Disposition: attachment; filename="ArchivoXML.xml"');
    echo $cadena_xml;
?>