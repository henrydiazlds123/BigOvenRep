

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class FillIngredientDiv
 */
@WebServlet("/FillIngredientDiv")
public class FillIngredientDiv extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public FillIngredientDiv() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
		
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		String example = "";
		if (request.getParameter("list") != null)
		{
			example = request.getParameter("list");
		}
		else
		{
			example = "fail";
		}
		
		String[] list = example.split(":");
		int size = list.length;
		
		PrintWriter out = response.getWriter();
		for(int i = 0; i < size; i++)
		{
		   out.print(list[i] + "<br />");
		}
	}

}
