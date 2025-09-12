<?php
/**
 * PDF Generator for Contact Form Submissions
 * Creates PDF with form data and company logo
 */

require_once 'config.php';

class ContactFormPDF {
    private $formData;
    
    public function __construct($formData) {
        $this->formData = $formData;
    }
    
    public function generatePDF() {
        // Simple HTML to PDF conversion using basic HTML structure
        $html = $this->generateHTML();
        
        // For now, we'll create a simple text-based PDF content
        // In production, you'd use libraries like TCPDF or FPDF
        $pdfContent = $this->createSimplePDF($html);
        
        return $pdfContent;
    }
    
    private function generateHTML() {
        $html = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <title>Contact Form Submission</title>
            <style>
                body { font-family: Arial, sans-serif; margin: 20px; }
                .header { text-align: center; margin-bottom: 30px; }
                .logo { max-width: 200px; height: auto; }
                .form-data { margin: 20px 0; }
                .field { margin: 10px 0; padding: 10px; border-bottom: 1px solid #eee; }
                .label { font-weight: bold; color: #333; }
                .value { margin-top: 5px; color: #666; }
                .footer { margin-top: 30px; text-align: center; color: #999; }
            </style>
        </head>
        <body>
            <div class="header">
                <img src="' . ASSETS_PATH . 'images/logo.png" alt="Mahati Interior Design" class="logo">
                <h1>Contact Form Submission</h1>
                <p>New project inquiry received</p>
            </div>
            
            <div class="form-data">
                <div class="field">
                    <div class="label">Full Name:</div>
                    <div class="value">' . htmlspecialchars($this->formData['firstName'] . ' ' . $this->formData['lastName']) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Email Address:</div>
                    <div class="value">' . htmlspecialchars($this->formData['email']) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Phone Number:</div>
                    <div class="value">' . htmlspecialchars($this->formData['phone'] ?: 'Not provided') . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Project Type:</div>
                    <div class="value">' . htmlspecialchars($this->formData['projectType']) . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Budget Range:</div>
                    <div class="value">' . htmlspecialchars($this->formData['budget'] ?: 'Not specified') . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Project Timeline:</div>
                    <div class="value">' . htmlspecialchars($this->formData['timeline'] ?: 'Not specified') . '</div>
                </div>
                
                <div class="field">
                    <div class="label">Project Details:</div>
                    <div class="value">' . nl2br(htmlspecialchars($this->formData['message'])) . '</div>
                </div>
                
            </div>
            
            <div class="footer">
                <p>Submitted on: ' . date('F j, Y \a\t g:i A') . '</p>
                <p>Mahati Interior Design - Transform Your Space</p>
            </div>
        </body>
        </html>';
        
        return $html;
    }
    
    private function createSimplePDF($html) {
        // Simple PDF creation - in production use proper PDF library
        $pdfHeader = "%PDF-1.4\n";
        $pdfContent = "1 0 obj\n<< /Type /Catalog /Pages 2 0 R >>\nendobj\n";
        $pdfContent .= "2 0 obj\n<< /Type /Pages /Kids [3 0 R] /Count 1 >>\nendobj\n";
        $pdfContent .= "3 0 obj\n<< /Type /Page /Parent 2 0 R /MediaBox [0 0 612 792] /Contents 4 0 R >>\nendobj\n";
        
        // Convert HTML to simple text for PDF
        $textContent = strip_tags(str_replace(['<br>', '<br/>', '<br />'], "\n", $html));
        $textContent = html_entity_decode($textContent);
        
        $pdfContent .= "4 0 obj\n<< /Length " . strlen($textContent) . " >>\nstream\n";
        $pdfContent .= "BT\n/F1 12 Tf\n50 750 Td\n";
        
        $lines = explode("\n", $textContent);
        $yPos = 750;
        foreach ($lines as $line) {
            if (!empty(trim($line))) {
                $pdfContent .= "(" . addslashes(trim($line)) . ") Tj\n";
                $yPos -= 15;
                $pdfContent .= "0 -15 Td\n";
            }
        }
        
        $pdfContent .= "ET\nendstream\nendobj\n";
        
        $pdfContent .= "xref\n0 5\n0000000000 65535 f \n";
        $pdfContent .= sprintf("%010d 00000 n \n", strlen($pdfHeader));
        $pdfContent .= "trailer\n<< /Size 5 /Root 1 0 R >>\nstartxref\n";
        $pdfContent .= strlen($pdfHeader . $pdfContent) . "\n%%EOF";
        
        return $pdfHeader . $pdfContent;
    }
    
    public function savePDF($filename) {
        $pdfContent = $this->generatePDF();
        $filepath = sys_get_temp_dir() . '/' . $filename;
        file_put_contents($filepath, $pdfContent);
        return $filepath;
    }
}
?>
