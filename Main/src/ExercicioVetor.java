import java.io.IOException;
import java.util.Scanner;
 
/**
 * IMPORTANT: 
 *      O nome da classe deve ser "Main" para que a sua solução execute
 *      Class name must be "Main" for your solution to execute
 *      El nombre de la clase debe ser "Main" para que su solución ejecutar
 */
public class Main {
 
    public static void main(String[] args) throws IOException {
 
        /**
         * Escreva a sua solução aqui
         * Code your solution here
         * Escriba su solución aquí
         */

        Scanner leitura = new Scanner (System.in);

        int N[] = new int[1000];

        int T = leitura.nextInt();

        int numero = 0;

        for (int contador = 0; contador < N.length; contador++) {

            N[contador] = numero;

            System.out.printf("N[%d] = %d\n", contador, N[contador]);

            numero++;

            numero = numero % T;

        }
 
    }
 
}