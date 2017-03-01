import java.io.File;
import java.io.IOException;
import java.util.ArrayList;

import org.apache.pdfbox.cos.COSDocument;
import org.apache.pdfbox.io.RandomAccessFile;
import org.apache.pdfbox.pdfparser.PDFParser;
import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;
import org.apache.pdfbox.text.PDFTextStripperByArea;

/* Using apache.pdfbox  */
/* See radixcode for base code to extract text from pdf */
/*https://radixcode.com/pdfbox-example-code-how-to-extract-text-from-pdf-file-with-java/*/

public class PDFManager {
    
   private PDFParser parser;
   private PDFTextStripper pdfTStripper;
   private PDFTextStripperByArea pdfStripper;
   private PDDocument pdDoc ;
   private COSDocument cosDoc ;
   
   private String Text ;
   private String filePath;
   private File file;

    public PDFManager() {
        
    }
   public String ToText() throws IOException
   {
       this.pdfStripper = null;
       this.pdDoc = null;
       this.cosDoc = null;
       
       file = new File(filePath);
       parser = new PDFParser(new RandomAccessFile(file,"r")); // update for PDFBox V 2.0
       
       parser.parse();
       cosDoc = parser.getDocument();
       pdfStripper = new PDFTextStripperByArea();
       pdfStripper.setSortByPosition(true);
       pdfTStripper = new PDFTextStripper();
       /*pdDoc = new PDDocument(cosDoc);
       pdDoc.getNumberOfPages();
       pdfStripper.setStartPage(1);
       pdfStripper.setEndPage(pdDoc.getNumberOfPages()); */      
       Text = pdfTStripper.getText(pdDoc);
       pdDoc.close();
       
	   /*try{
		   PDDocument document = null; 
		   document = PDDocument.load(file);
		   document.getClass();
		   if( !document.isEncrypted() ){
		       PDFTextStripperByArea stripper = new PDFTextStripperByArea();
		       stripper.setSortByPosition( true );
		       PDFTextStripper Tstripper = new PDFTextStripper();
		       String st = Tstripper.getText(document);
		       System.out.println("Text:"+st);
		   }
		   }catch(Exception e){
		       e.printStackTrace();
		   }*/
       return Text;
       
      
  
       
       
   }

    public void setFilePath(String filePath) {
        this.filePath = filePath;
    }
    public File getFile() {
    	return this.file;
    }
   
}