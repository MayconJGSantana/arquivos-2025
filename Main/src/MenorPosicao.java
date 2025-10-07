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

         int N = leitura.nextInt();

         int X[] = new int[N];

         for (int contador = 0; contador < X.length; contador++) {

            X[contador] = leitura.nextInt();

         }

         int menorValor = X[0];
         int menorValorPosicao = 0;

         for (int contador = 1; contador < X.length; contador++) {

            if (menorValor > X[contador]) {

                menorValor = X[contador];
                menorValorPosicao = contador;

            }

         }

         System.out.format("Menor valor: %d\n" +
                            "Posicao: %d\n", menorValor, menorValorPosicao);
 
    }
 
}