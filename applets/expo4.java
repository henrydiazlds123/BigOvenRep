import java.awt.Color;
import java.awt.event.*;
import java.awt.Graphics;
import java.net.*;
import java.io.*;
import java.applet.*;
import java.awt.*;

public class FunApplet
   extends java.applet.Applet
{
   //got help for textfield from http://www.willamette.edu/~gorr/classes/cs231/lectures/chapter5/
   //got help for the button from http://docs.oracle.com/javase/tutorial/uiswing/components/button.html#abstractbutton
   TextField inputLine = new TextField(40);
   
   public FunApplet() {
      add(inputLine);
   }
   
   public void actionPerformed(ActionEvent event)
   {
      String direction = inputLine.getText();
   }

    public static void main(String[] args) throws Exception {

        URL oracle = new URL("http://www.oracle.com/");
        BufferedReader in = new BufferedReader(
        new InputStreamReader(oracle.openStream()));
        
        Button addToStartList = new Button("Name");

        

        String inputLine;
        while ((inputLine = in.readLine()) != null)
            System.out.println(inputLine);
        in.close();
    }
}

