<template v-slot:top>
            <v-toolbar flat color="white">
              <div class="flex-grow-1"></div>
              <v-dialog v-model="dialog" persistent max-width="100px">
                <template v-slot:activator="{ on }">
                    <v-col >
                        <v-form>
                    Desde: <input color="red" class="form-control" type="date" name="" id="" required="Fecha es requerida">
                    Hasta: <input class="form-control" type="date" name="" id="" required="Fecha es requerida">
                    </v-form>
                    </v-col>
                  <v-btn  small elevation="4" color="red" height="36"  dark class="mb-2 botonpdf" href="/equipos/pdf" target="_blank">
                     Generar PDF&nbsp;
                    <v-icon>file-document-box-multiple-outline</v-icon>
                  </v-btn>
                 
                </template>
              </v-dialog>
            </v-toolbar>
          </template>
