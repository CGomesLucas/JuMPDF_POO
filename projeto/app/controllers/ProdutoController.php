<?php
require __DIR__ . '/../models/Produto.php';
require __DIR__ . '/../../vendor/autoload.php';

class ProdutoController {
    private $produytoModel;

    public function __construct($db) {
        $produtos = $this->produtoModel->listarProdutos();

        //Requisição da visualização (HTML do Relatório)
        ob_start();
        include __DIR__ . '/../views/relatorio_produtos.php';
        $html = ob_get_clean();
        //Geração do PDF com mPDF
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($html);
        $mpdf->Output('relatorio_produtos.pdf', \Mpdf\Output\Destination::INLINE);
    }
}
