import java.awt.Color;
import java.awt.event.*;
import java.awt.Graphics;
import java.net.*;
import java.io.*;
import java.applet.*;
import java.awt.*;
import javax.swing.*;

public class expo4 extends Applet
implements ActionListener
{
   //got help for textfield from http://www.willamette.edu/~gorr/classes/cs231/lectures/chapter5/
   //got help for the button from http://docs.oracle.com/javase/tutorial/uiswing/components/button.html#abstractbutton
   //got a lot of help from the book titled "The JFC Swing Tutorial Second Edition: A Guide to Constructing GUIs"
   TextField inputLine = new TextField(40);
   
   public expo4() {
      add(inputLine);
         inputLine.addActionListener(this);

   }
   
   private static void createAndShowGUI() {
   JFrame.setDefaultLookAndFeelDecorated(true);

   JFrame frame = new JFrame("");
  // add(inputLine);
   JButton addToStartList = new JButton("Name");
   addToStartList.addActionListener(new expo4());
   
   frame.getContentPane().add(addToStartList);
   frame.getContentPane().add(addToStartList);
  // frame.getContentPane().add(inputLine);
 //  String inputLine;
   

 
   //Display window
   frame.pack();
   frame.setVisible(true);
   frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
}
public static void main(String[] args) {
new expo4().run();
}
public void run() {
createAndShowGUI();
}
        
       
    public void actionPerformed(ActionEvent event)
   {
      String direction = inputLine.getText();
      JLabel label = new JLabel("SHows");
   }

}

