package bO;

import java.io.IOException;
import java.io.StringReader;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

import org.w3c.dom.Document;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;
import org.xml.sax.InputSource;
import org.xml.sax.SAXException;

//import com.sun.org.apache.xerces.internal.parsers.DOMParser;

/**
 * Servlet implementation class BOIngredients
 */
@WebServlet("/BOIngredients")
public class BOIngredients extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public BOIngredients() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException 
	{
	   testGet tg = new testGet();
	   String urlToRead = "http://api.bigoven.com/recipes?any_kw=tortilla&pg=1&rpp=20&api_key=dvx92WhnkjK71I76s2Xd3ARa37DkdVQU&title_kw=bacon";
	   
	   String result = tg.getHTML(urlToRead);
	   System.out.print(result + "\n");
	   XMLParse xml = new XMLParse();
	   try
      {
         Document doc = loadXMLFromString(result);
      // Get the document's root XML node
         Node root = doc.getDocumentElement();
         NodeList nodes = root.getChildNodes();
         String count = xml.getNodeValue("ResultCount", nodes);
         
         System.out.print(count + "\n");
         NodeList recipies = doc.getElementsByTagName("RecipeInfo");
         
         for (int temp = 0; temp < recipies.getLength(); temp++)
         {
            Node recipeInfo = recipies.item(temp);
            NodeList recipeInfoChildren = recipeInfo.getChildNodes();
            
            for (int i = 0; i < recipeInfoChildren.getLength(); i++) 
            {
               Node child = recipeInfoChildren.item(i);
               if (child.getNodeName().equals("Title")) 
               {
                  System.out.println(child.getTextContent());
               }
               if (child.getNodeName().equals("RecipeID")) 
               {
                  System.out.println(child.getTextContent());
               }
             //This gets the URLs
               if (child.getNodeName().equals("WebURL")) 
               {
                  System.out.println(child.getTextContent());
               }
               if (child.getNodeName().equals("ImageURL")) 
               {
                  System.out.println(child.getTextContent());
               }
            }
            
         }
         
         
      } catch (SAXException e)
      {
         // TODO Auto-generated catch block
         e.printStackTrace();
      } catch (Exception e)
      {
         // TODO Auto-generated catch block
         e.printStackTrace();
      }
	   
	   request.setAttribute("recipe", result);
	   request.getRequestDispatcher("testSearch.jsp").forward(request, response); 
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
	}

	public static Document loadXMLFromString(String xml) throws Exception
	{
	    DocumentBuilderFactory factory = DocumentBuilderFactory.newInstance();
	    DocumentBuilder builder = factory.newDocumentBuilder();
	    InputSource is = new InputSource(new StringReader(xml));
	    return builder.parse(is);
	}
}
