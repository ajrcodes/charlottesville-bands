import java.io.File;
import java.io.IOException;
import java.io.StringReader;
import java.io.StringWriter;
import java.io.Writer;
import java.util.ArrayList;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;
import org.apache.pdfbox.text.PDFTextStripperByArea;

public class PDFTest {
	

	public static void main(String[] args) throws IOException{   
		  File file = new File("/Users/ryandonovan/Documents/test.pdf");
		  PDDocument doc = PDDocument.load(file);
		  PDFTextStripper stripper = new PDFTextStripper();
		  String text = stripper.getText(doc);
		  String arr [] = text.split("\\r");
		  ArrayList<String> text_lines = new ArrayList<String>();
		  for(String s: arr){
			  String str = "";
			  int i = 0;
			  while(i < s.length()-1){
				  str +=s.charAt(i);
				  i++;
			  }
			  text_lines.add(str);
			  
		  }
		  for (String s : text_lines){
			 s = s.replaceAll(" ", "");
			 System.out.print(s);
		  }
		  
		  doc.close();
		
		 }
	

}
