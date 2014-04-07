package bO;

import java.io.IOException;
import java.io.StringReader;
import java.util.ArrayList;
import java.util.List;

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
	   //String[] array = request.getAttribute("ingredient");
	   String ingred = "";
	   //for (int i = 0; i < array.length(); i++)
	   {
	      //for (int j = 0; j < array[i].length(); j++)
	        // array[j].replaceAll(" ", "%20");
	      //ingred= ingred + "%20\"" + array[j] + "\"";
	   }
	   testGet tg = new testGet();
	   
	   //String urlToRead = "http://api.bigoven.com/recipes?any_kw="+ingred+"&pg=1&rpp=100&api_key=dvx92WhnkjK71I76s2Xd3ARa37DkdVQU";
	   String urlToRead = "http://api.bigoven.com/recipes?any_kw=\"cheese\"%20\"bacon\"&pg=1&rpp=100&api_key=dvx92WhnkjK71I76s2Xd3ARa37DkdVQU";
	   
	   String result = tg.getHTML(urlToRead);
	   System.out.print(result + "\n");
	   //Vector<Recipe> victor = new Vector(); 
	   List<Recipe> victor = new ArrayList<Recipe>(); 
	   try
      {
         Document doc = loadXMLFromString(result);
      // Get the document's root XML node
         Node root = doc.getDocumentElement();
         NodeList nodes = root.getChildNodes();
         String count = getNodeValue("ResultCount", nodes);
         
         System.out.print(count + "\n");
         NodeList recipies = doc.getElementsByTagName("RecipeInfo");
         
         for (int temp = 0; temp < recipies.getLength(); temp++)
         {
            Node recipeInfo = recipies.item(temp);
            NodeList recipeInfoChildren = recipeInfo.getChildNodes();
            Recipe pokemon = new Recipe();
            for (int i = 0; i < recipeInfoChildren.getLength(); i++) 
            {
               
               Node child = recipeInfoChildren.item(i);
               if (child.getNodeName().equals("Title")) 
               {
                  pokemon.setRecipe_name(child.getTextContent());
               }
               if (child.getNodeName().equals("RecipeID")) 
               {
                  pokemon.setRecipe_BOID(child.getTextContent());
               }
             //This gets the URLs
               if (child.getNodeName().equals("WebURL")) 
               {
                  pokemon.setRecipe_url(child.getTextContent());
                  System.out.println(child.getTextContent());
               }
               if (child.getNodeName().equals("ImageURL")) 
               {
                  System.out.print(child.getTextContent());
                  pokemon.setRecipe_img(child.getTextContent());
               }
               
            }
            victor.add(pokemon);
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
	   System.out.println(victor.size());
	   request.setAttribute("recipe", victor);
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
	protected String getNodeValue(String tagName, NodeList nodes ) 
	{
	   for ( int x = 0; x < nodes.getLength(); x++ ) 
	   {
	      Node node = nodes.item(x);
	      if (node.getNodeName().equalsIgnoreCase(tagName)) 
	      {
	         NodeList childNodes = node.getChildNodes();
	         for (int y = 0; y < childNodes.getLength(); y++ ) 
	         {
	            Node data = childNodes.item(y);
	            if ( data.getNodeType() == Node.TEXT_NODE )
	               return data.getNodeValue();
	         }
	      }
	   }
	   return "";
	}
	
	public String parseArray(List<String> list)
	{
	   String ingredients = "";
	   for (int i = 0; i < list.size(); i++)
	      ingredients = ingredients +"\"" +list.get(i) + "\"";
	      //ingredients = ingredients + list.get(i) ;
	   return ingredients;
	}
	
}
