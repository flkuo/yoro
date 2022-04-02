rm(list=ls())
library(shiny)

#01 template
ui <- fluidPage("Hello World")
server<- function(input,output){}
shinyApp(ui=ui,server=server)

#02  
ui <- fluidPage(
  #*Input() functions,
  #*Output() functions
)
server<- function(input,output){}
shinyApp(ui=ui,server=server)

#03
ui <- fluidPage(
  sliderInput(inputId = "num",
            label= "Choose a number",
            value= 25, min=1, max=100)
)

server <- function(input, output) {}
shinyApp(server = server, ui=ui)

#04
ui <- fluidPage(
  sliderInput(inputId = "num",
              label= "Choose a number",
              value= 25, min=1, max=100), 
plotOutput("hist")
)
server <- function(input, output) {
  output$hist <- renderPlot({
    hist(rnorm(100))})
  
  }
shinyApp(server = server, ui=ui)


#05
ui <- fluidPage(
  sliderInput(inputId = "num",
              label= "Choose a number",
              value= 25, min=1, max=100), 
  plotOutput("hist")
)
server <- function(input, output) {
  output$hist <- renderPlot({
    title <- "100 random normal values"
    hist(rnorm(100), main=title)
    })
}

shinyApp(server = server, ui=ui)

#06
ui <- fluidPage(
  sliderInput(inputId = "num",
              label= "Choose a number",
              value= 28, min=1, max=100), 
  plotOutput("hist")
)
server <- function(input, output) {
  output$hist <- renderPlot({
    title <- "100 random normal values"
    hist(rnorm(input$num), main=title)
  })
}

shinyApp(server = server, ui=ui)

