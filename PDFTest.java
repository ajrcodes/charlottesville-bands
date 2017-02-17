import java.io.IOException;
import java.util.ArrayList;

public class PDFTest {

	public static void main(String[] args) throws IOException{   
		  ArrayList<PDFManager> pdf_managers = new ArrayList<PDFManager>();
		  PDFManager pdfManager1 = new PDFManager();  
		  pdfManager1.setFilePath("/Users/ryandonovan/Documents/test.pdf");
		  pdf_managers.add(pdfManager1);
		  for(int i = 0; i < pdf_managers.size(); i++) {
			  System.out.print(pdf_managers.get(i).ToText()); 
		  }
		     

	}

}
